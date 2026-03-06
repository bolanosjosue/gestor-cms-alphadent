<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin') - Mini CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- TinyMCE editor -->
    <script src="https://cdn.tiny.cloud/1/72fxp7mkideo5krnt1km07lrwqmynpg5he82zrhk68pawg46/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/images/logof.png">

</head>

<body>
    <div class="wrap">
        <aside>
            <h1>AlphaDent</h1>

            <div class="nav">
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.articles.index') }}"
                    class="{{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">Artículos</a>
                <a href="{{ route('admin.staff.index') }}"
                    class="{{ request()->routeIs('admin.staff.*') ? 'active' : '' }}">Personal</a>
            </div>

            @auth
                <form method="POST" action="{{ route('logout') }}" class="nav-logout">
                    @csrf
                    <button type="submit" class="btn btn-outline btn-small">Cerrar sesión</button>
                </form>
            @endauth
        </aside>

        <main>
            <div class="topbar">
                <h2>@yield('title', 'Admin')</h2>
                <div>@yield('actions')</div>
            </div>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error">Hay errores en el formulario. Revisá los campos marcados.</div>
                <div class="alert alert-error">
                    <ul style="margin:0;padding-left:1.25rem;">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Slug auto/manual
            document.querySelectorAll('[data-slug-source]').forEach(function(titleInput) {
                const form = titleInput.closest('form');
                if (!form) return;

                const slugInput = form.querySelector('[data-slug-input]');
                const autoCheckbox = form.querySelector('[data-slug-auto]');
                if (!slugInput || !autoCheckbox) return;

                function slugify(value) {
                    value = (value || '').toString();
                    value = value.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
                    value = value.toLowerCase();
                    value = value.replace(/[^a-z0-9\s-]/g, '');
                    value = value.trim().replace(/\s+/g, '-');
                    value = value.replace(/-+/g, '-');
                    return value;
                }

                function applyAuto() {
                    if (!autoCheckbox.checked) return;
                    slugInput.value = slugify(titleInput.value);
                }

                titleInput.addEventListener('input', applyAuto);
                autoCheckbox.addEventListener('change', function() {
                    slugInput.readOnly = autoCheckbox.checked;
                    if (autoCheckbox.checked) applyAuto();
                });

                slugInput.readOnly = autoCheckbox.checked;
                if (autoCheckbox.checked && !slugInput.value) applyAuto();
            });

            // Tags input -> hidden JSON
            document.querySelectorAll('[data-tags-root]').forEach(function(root) {
                const input = root.querySelector('[data-tags-input]');
                const hidden = root.querySelector('[data-tags-hidden]');
                const list = root.querySelector('[data-tags-list]');
                const addBtn = root.querySelector('[data-tags-add]');

                if (!input || !hidden || !list || !addBtn) return;

                let tags = [];
                try {
                    const initial = JSON.parse(hidden.value || '[]');
                    if (Array.isArray(initial)) tags = initial;
                } catch (e) {}

                function render() {
                    list.innerHTML = '';
                    tags.forEach(function(t, idx) {
                        const el = document.createElement('span');
                        el.className = 'tag';
                        el.innerHTML =
                            '<span></span><button type="button" aria-label="Quitar tag">&times;</button>';
                        el.querySelector('span').textContent = t;
                        el.querySelector('button').addEventListener('click', function() {
                            tags.splice(idx, 1);
                            sync();
                        });
                        list.appendChild(el);
                    });
                    hidden.value = JSON.stringify(tags);
                }

                function normalizeTag(t) {
                    return (t || '').toString().trim().replace(/\s+/g, ' ');
                }

                function addTag() {
                    const t = normalizeTag(input.value);
                    if (!t) return;
                    if (tags.length >= 4) {
                        alert('Máximo 4 tags por artículo.');
                        return;
                    }
                    tags.push(t);
                    input.value = '';
                    sync();
                }

                function sync() {
                    render();
                }

                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        addTag();
                    }
                });

                addBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    addTag();
                });

                render();
            });

            // TinyMCE initialization
            tinymce.init({
                selector: '#content',
                height: 400,
                plugins: 'autolink lists link image media table code help wordcount',
                toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | link image media | code | help',
                menubar: 'file edit view insert format table help',
                language: 'es',
                content_style: 'body { font-family: system-ui, -apple-system, sans-serif; font-size: 14px; }',
                automatic_uploads: true
            });

            // Form validation para TinyMCE
            document.querySelectorAll('form').forEach(function(form) {
                const contentField = form.querySelector('#content');
                if (!contentField) return;

                form.addEventListener('submit', function(e) {
                    const editor = tinymce.get('content');
                    if (editor) {
                        const content = editor.getContent().trim();
                        if (!content) {
                            e.preventDefault();
                            alert(
                                'El contenido es obligatorio. Por favor, escriba algo en el editor.');
                            editor.focus();
                            return false;
                        }
                        // Copiar contenido de TinyMCE al textarea
                        contentField.value = content;
                    }
                });
            });
        });
    </script>
</body>

</html>
