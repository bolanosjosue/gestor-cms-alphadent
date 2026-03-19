(function () {

    const EXT = "jpeg";
    const BASE = "gallery-images/";

    const albums = {

        alphadent: {
            folder: "alphadent",
            prefix: "alphadent",
            from: 1,
            to: 4
        },

        alphakids: {
            folder: "alphakids",
            prefix: "alphakids",
            from: 1,
            to: 5
        },

        aseguradoras: {
            folder: "aseguradoras",
            prefix: "aseguradoras",
            from: 1,
            to: 2
        },

        boletines: {
            folder: "boletines",
            prefix: "boletin",
            from: 1,
            to: 10
        }
    };
    const select = document.getElementById("galleryAlbumSelect");
    const grid = document.getElementById("galleryGrid");
    function buildGallery(albumKey) {
        const album = albums[albumKey];
        let html = "";
        let delay = 0;
        for (let i = album.from; i <= album.to; i++) {
            const src =
                BASE +
                album.folder +
                "/" +
                album.prefix +
                i +
                "." +
                EXT;
            html += `
      <div class="col-lg-3 col-md-4 col-6">
        <div class="photo-gallery wow fadeInUp"
             data-wow-delay="${delay.toFixed(1)}s"
             data-cursor-text="View">
          <a href="${src}">
            <figure>
              <img src="${src}">
            </figure>
          </a>
        </div>
      </div>
      `;
            delay += 0.1;
            if (delay > 0.8) delay = 0.2;
        }
        grid.innerHTML = html;
        // reactiva magnific popup
        if (window.jQuery) {
            $(".gallery-items").magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: true
                }
            });
        }
        // reactiva animaciones
        if (window.WOW) {
            new WOW().init();
        }
    }
    select.addEventListener("change", function () {
        buildGallery(this.value);
    });
    // carga inicial
    buildGallery("alphadent");

})();
