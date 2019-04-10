import NotFound from './components/NotFound.vue';
import Episode1and2 from './components/Episode1and2';
import Episode3 from './components/Episode3';

export default {

	mode: 'history', //Use HTML5 History api (as oppsed to hashes in the url)

	linkActiveClass: 'font-bold', //Class to apply to active link on the global scale. (as opposed to applying to each link in app.blade.php)

	routes: [
		//404
		{
			path: '*',
			component: NotFound
		},
        {
            path: '/',
            component: Episode1and2
        },
        {
            path: '/episode-3',
            component: Episode3
        },

	]
}