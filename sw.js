var cacheName = 'app-v1';
var appShellFiles = [
 '/index.html',
    '/about.html'
];

//install event
self.addEventListener('install', evt=> {
<<<<<<< HEAD
  //console.log('service worker installed');
  evt.waitUntil(caches.open(staticCache).then(cache=>{
        console.log('cache adding');
        cache.addAll(assets);                        
      })
    );
=======
  //console.log('service worker installed');
  evt.waitUntil(caches.open(staticCache).then(cache=>{
        console.log('cache adding');
        cache.addAll(assets);                        
      })
    );
>>>>>>> bc526a2aa0538e0ddfc9b2405b57418328b0b7e6
});

//activate event
self.addEventListener('activate', evt=>{
<<<<<<< HEAD
      //console.log('service worker activated');
=======
      //console.log('service worker activated');
>>>>>>> bc526a2aa0538e0ddfc9b2405b57418328b0b7e6
});

//fetch event
self.addEventListener('fetch', evt=>{
<<<<<<< HEAD
          //console.log('fetch event', evt);
         evt.respondWith(
             caches.match(evt.request).then(cacheRes =>{
                 return cacheRes || fetch(evt.request);
             })
         );
});
=======
          //console.log('fetch event', evt);
         evt.respondWith(
             caches.match(evt.request).then(cacheRes =>{
                 return cacheRes || fetch(evt.request);
             })
         );
});
>>>>>>> bc526a2aa0538e0ddfc9b2405b57418328b0b7e6
