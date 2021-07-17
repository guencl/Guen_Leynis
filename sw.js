self.addEventListener("install", e => { 
    e.waitUntil(
      caches.open("offlineFiles").then(cache => {
         return cache.addAll([
             "./",
             "./src/index.js",
             "./src/styles.css",
             "./image/aboutme.png",
             "./image/guen.png",
             "./image/itst.png",
             "./image/itst2.png",
             "./image/moviemusic.png",
             "./image/prog.png",
             "./image/out.gif",
             "./image/192.png",
             "./image/512.png",
             "./.gitattributes",
             "./errors.php",
             "./firstdesign.css",
             "./home.php",
             "./index.php",
             "./manifest.webmanifest",
             "./README.md",
             "./register.php",
             "./seconddesign.css",
             "./server.php"

         ]);
      })
    );
});

self.addEventListener("fetch", e => {
   console.log("Intercepting request :"+ e.request.url);
   e.respondWith(
       caches.match(e.request).then(response => {
            return response || fetch(e.request);
       })
   );
});