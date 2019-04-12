import NotFound from './components/NotFound.vue';
import Episode1 from './components/Episode1';
import Episode2 from './components/Episode2';
import Episode3 from './components/Episode3';
import Episode4 from './components/Episode4';

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
            component: Episode1
        },
        {
            path: '/episode-2',
            component: Episode2
        },
        {
            path: '/episode-3',
            component: Episode3
        },
        {
            path: '/episode-4',
            component: Episode4
        },

	]
}