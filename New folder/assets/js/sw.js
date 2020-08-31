var catheName = "CSV3";
var dynamic_catheName = "DCSV1";
var cathedFiles = [
	'/',
	'/application/views/index.php',
	'/application/views/Page_Offline.php',
	'/application/views/sw.js',
	'/application/views/manifest.json',
	'/assets/css/index.css',
	'/assets/js/main.js',
	'/assets/images/Arm 01.svg',
	'/assets/images/back.jpg',
	'/assets/images/back.svg',
	'/assets/images/Background.png',
	'/assets/images/big.jpg',
	'/assets/images/black-arrow-back_211686.svg',
	'/assets/images/bot-1.png',
	'/assets/images/bot-2.png',
	'/assets/images/exit.svg',
	'/assets/images/food.svg',
	'/assets/images/good.svg',
	'/assets/images/gym.svg',
	'/assets/images/home.svg',
	'/assets/images/insta.png',
	'/assets/images/location.svg',
	'/assets/images/logo.png',
	'/assets/images/insta.png',
	'/assets/images/location.svg',
	'/assets/images/logo.png',
	'/assets/images/medium.jpg',
	'/assets/images/menu-24px.svg',
	'/assets/images/panel_bot.png',
	'/assets/images/rules.svg',
	'/assets/images/share.svg',
	'/assets/images/small.jpg',
	'/assets/images/Support.svg',
	'/assets/images/telegram.png',
	'/assets/images/Tip_1.jpg',
	'/assets/images/Tip_2.jpg',
	'/assets/images/top-1.png',
	'/assets/images/top-2.png',
	'/assets/images/user.svg',
	'/assets/images/user-add.svg',
	'/assets/images/yellow.png',
	'/assets/images/yellow-arrow-back_211686.svg'
    
];




self.addEventListener('install', function (event) {
	console.log('[SW] Installing Service Worker ...', event);
	event.waitUntil(
		caches.open(catheName).then(function(cache){
			console.log('caching Files');
			return cache.addAll(cathedFiles);
		}).then(function(){
			return self.skipWaiting();
		}).catch(function(err){
			console.log('cachedFiles', err);
		})

	);

});

self.addEventListener('activate', function (event) {
	console.log('[SW] Activating Service Worker ....', event);
	event.waitUntil(
		caches.keys().then(function(keylist){
			return Promise.all(keylist.map(function(key){
				if(key !== catheName && key !== dynamic_catheName ){
					console.log('Removing Old  Cache ', key)
					return caches.delete(key);
				}
			}))
		})
	);
	return self.clients.claim();
});

self.addEventListener('fetch', function (event) {
	console.log('[SW] fetching Service Worker ....', event.request.url);
	event.respondWith(
		caches.match(event.request).then(function(response){
			return response || fetch(event.request).then(function (res) {
				caches.open(dynamic_catheName).then(function (cache) {
					cache.put(event.request, res);
				});
				return res.clone();
			}).catch(function (err) {
				console.error('[SW] cache in fetch error');
				return caches.open(catheName).then(function (cache) {
					if(event.request.get('accept').includes('text.html')) {
						return cache.match('/offline.html');
					}
					if (event.request.url.match(/\.(jpe?g|png|gif|svg)$/)) {
						return cache.match('/images/placeholder.png');
					}
				});
			});
		}).catch(console.error)
	);
});

