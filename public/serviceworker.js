var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/css/app.css',
    '/js/app.js',
    "/storage/01J7DSW9WQZB83ZF32B3BJN8WM.png",
    "/storage/01J7DSW9X68WAEGWKYD1CH2188.png",
    "/storage/01J7DSW9XG2MQQTXKK3HRCM0YZ.png",
    "/storage/01J7DSW9XXNMSYXW92SDAYBK4T.png",
    "/storage/01J7DSW9YCZFBMET96QBD557E1.png",
    "/storage/01J7DSZ3J1ZQQQW90EFM49MEWC.png",
    "/storage/01J7DSXDSQB8AA98KHE0Y7DVTR.png",
    "/storage/01J7DSXDT3038DXBJZJAYZQQZD.png"
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});
