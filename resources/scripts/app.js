import domReady from '@roots/sage/client/dom-ready';
import navPrimary from './nav-primary.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  navPrimary();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
