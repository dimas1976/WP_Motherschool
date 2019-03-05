'use strict';

module.exports = {
	theme: {
		slug: 'wprig',
		name: 'motherschool',
		author: 'Dmitriy Kogan'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: '127.0.0.1/wordpress/sm/',
			bypassPort: '8181'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: false, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: true
	}
};
