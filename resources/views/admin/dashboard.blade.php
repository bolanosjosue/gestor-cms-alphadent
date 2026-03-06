@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="grid">
        <div class="card" style="border-color:#dbeafe;background:#eff6ff;">
            <h3 style="margin:0 0 .35rem;font-size:.9rem;color:#1d4ed8;text-transform:uppercase;letter-spacing:.04em;">
                Artículos totales
            </h3>
            <p style="font-size:1.8rem;font-weight:700;margin:0 0 .25rem;">{{ $totalArticles }}</p>
            <p class="muted" style="margin:0;font-size:.8rem;">Incluye publicados y borradores.</p>
        </div>

        <div class="card" style="border-color:#bbf7d0;background:#ecfdf3;">
            <h3 style="margin:0 0 .35rem;font-size:.9rem;color:#15803d;text-transform:uppercase;letter-spacing:.04em;">
                Publicados
            </h3>
            <p style="font-size:1.8rem;font-weight:700;margin:0 0 .25rem;">{{ $publishedArticles }}</p>
            <p class="muted" style="margin:0;font-size:.8rem;">Visibles en el blog estático y API.</p>
        </div>

        <div class="card" style="border-color:#fecaca;background:#fef2f2;">
            <h3 style="margin:0 0 .35rem;font-size:.9rem;color:#b91c1c;text-transform:uppercase;letter-spacing:.04em;">
                Borradores
            </h3>
            <p style="font-size:1.8rem;font-weight:700;margin:0 0 .25rem;">{{ $draftArticles }}</p>
            <p class="muted" style="margin:0;font-size:.8rem;">Aún no generan HTML ni aparecen en público.</p>
        </div>

        <div class="card" style="border-color:#e5e7eb;background:#f9fafb;">
            <h3 style="margin:0 0 .35rem;font-size:.9rem;color:#374151;text-transform:uppercase;letter-spacing:.04em;">
                Miembros de personal
            </h3>
            <p style="font-size:1.8rem;font-weight:700;margin:0 0 .25rem;">{{ $staffCount }}</p>
            <p class="muted" style="margin:0;font-size:.8rem;">Se exponen en el endpoint público de staff.</p>
        </div>
    </div>

    @if($latestPublished->count())
        <div class="mt-4">
            <h3 style="margin:0 0 .5rem;font-size:1rem;">Últimos publicados</h3>
            <table>
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Slug</th>
                    <th>Fecha publicación</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($latestPublished as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td><span class="muted">{{ $article->slug }}</span></td>
                        <td>
                            @if($article->published_at)
                                {{ $article->published_at->format('Y-m-d H:i') }}
                            @else
                                <span class="muted">—</span>
                            @endif
                        </td>
                        <td style="text-align:right;">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-outline btn-small">
                                Editar
                            </a>
                            @if($article->isPublished())
                                <a href="{{ url('/blog/'.$article->slug.'/') }}" target="_blank" class="btn btn-primary btn-small">
                                    Ver HTML
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection

