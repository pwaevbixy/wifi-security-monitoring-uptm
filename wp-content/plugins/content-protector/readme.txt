=== Passster - Password Protect Pages and Content ===
Contributors: wpchill, silkalns
Tags: password protect, password, restrict content, sitewide, password protection
Requires at least: 6.5
Tested up to: 6.7
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Stable tag: 4.2.15

== Description ==
## Password Protect Pages, Posts & Content in WordPress

Passster is an all-in-one plugin to password protect pages, content, or your entire site in seconds—quick, secure, and easy to use.
Passster offers three protection modes to cover every use case you may think of when it comes to password protecting your WordPress website.

### Passster Pro – Even more protection features when making a purchase

**Multiple Passwords & Password Lists**  
- Assign multiple passwords for different users.  
- Create and manage large password lists for easy control.  

**Quick & Bulk Edit for Password Protection**  
- Use WordPress **Quick Edit** and **Bulk Edit** to protect multiple pages instantly.  

**Unlock Content by User Role or Email**  
- Automatically grant access to specific users or email addresses.  

**Password Expiration & Usage Limits**  
- Set passwords to expire after a number of uses, first use, or by a time limit (hours, days, weeks).  
- Track which passwords were used and when they will expire.  

**Generate Unlock Links**  
- Create encrypted unlock links so users can access content without entering a password.  
- Automatically shorten links with **Bit.ly** for easy sharing.  

**WooCommerce Protection & Sales**  
- Protect WooCommerce pages, products, and checkout with a password.  
- Sell access to protected content—generate and email passwords automatically after purchase.  

**Detailed Password Usage Statistics**  
- Track when and how often passwords are used.  
- View first usage date, IP (optional), and browser details.  

## Quick Comparison (Free vs. Pro)

### Free Version:
✔ Protect sections of pages using shortcodes or blocks.  
✔ Secure entire pages and posts.  
✔ Automatically protect child pages with a single click.  
✔ Lock down your entire site with a password.  
✔ Unlock protected content without refreshing the page.  
✔ Customize the design, labels, and descriptions of the password form.  
✔ Use cookies to grant access across multiple protected areas.  

### Pro Version:
✔ Everything in the free version, plus:  
✔ Protect content with **multiple passwords** or password lists.  
✔ Quickly set up password protection via Quick Edit or Bulk Edit.  
✔ Protect content using **Google reCAPTCHA or hCAPTCHA**.  
✔ Unlock protected content by **user role or email**.  
✔ Set passwords to **expire** based on usage limits or time intervals.  
✔ Generate encrypted **unlock links** for seamless access.  
✔ Track and prevent **concurrent password sharing**.  
✔ Secure **WooCommerce products and store pages**.  
✔ Sell access to protected content via **WooCommerce integration**.  
✔ Detailed statistics on password usage and lists.  

Get it now on [passster.com/](https://passster.com/)

### Documentation

Learn more about this plugin [in our official documentation](https://passster.com/kb/)

== Support ==
* Free users: [Ask in our forum](https://wordpress.org/support/plugin/content-protector/)
* Pro users: [Get priority help](https://passster.com/contact-us/?utm_source=wordpress.org&utm_medium=web&utm_campaign=description&utm_term=contact+us)

== Frequently Asked Questions ==

= Can I use Passster in multiple languages =
All primary texts and information can be modified from the admin area of Passster.
The plugin is fully translatable in your language. There are only en_EN and de_DE at the moment, but you can easily add your preferred language as a .po/.mo.
It’s also fully compatible with WPML and Polylang.

== Screenshots ==
1. Passster Password Form
2. Passster Areas
3. Passster Settings
3. Passster Customizer Options

== Installation ==

Passster is simple to install:

1. Download the .zip'
2. Unzip
3. Upload the directory to your '/wp-content/plugins' directory
4. Go to the plugin management page and enable the Passster Plugin
5. Browse to Settings > Passster
6. Customise your settings and your good to go!

== Changelog ==

= 4.2.15 - 17.03.2025 =
* Added: Support for Turnstile captcha.

= 4.2.14 - 25.02.2025 =
* Fixed: Unlock link was not working properly.

= 4.2.13 - 03.02.2025 =
* Fixed: Global protection page was not being protected even if "Activate Protection" was on.

= 4.2.12 - 20.12.2024 =
* Changed: Security update - Updated Freemius SDK

= 4.2.10 - 11.12.2024 =
* Changed: Updated upsells information

= 4.2.9 - 10.12.2024 =
* Added: Settings upsells

= 4.2.8 - 06.12.2024 =
* Changed: Readme update

= 4.2.7 =

* WP 6.7 compatibility
* dependency updates
* PHP 8.3 compatibility
* make headline removable via design settings
* default tag for headlines is now <span> for SEO purposes
* fixed expiration with cookie usage (pro-only)

= 4.2.6.6 =

* WP 6.6 compatiblity
* latest dependencies for the block editor
* fixed missing default value breaking design settings
* latest Freemius SDK upgrade

= 4.2.6.5 =

* improved expiration for passwords with unlock links
* fixed escaping for redirect parameter
* several security improvements
* updated to 6.5 compatibility

= 4.2.6.4 =

* exclude pagebuilders from rest restriction (frontend editing)

= 4.2.6.3 =

* fixed components for WP 6.4.3 release (margin/radius)
* restrict Rest API access with global protection

= 4.2.6.2 =

* added exception for sanitized array setting (exclude pages)

= 4.2.6.1 =

* added hook to combine generated password with order
* improved sanitization on importer
* added russian + ukrainian translation
* SDK upgrade

= 4.2.6 =

* WordPress 6.4 compatibility

= 4.2.5 =

* WooCommerce email trigger after status complete
* added filter for generated password
* protected page optional for WooCommerce integration
* improved admin UI contrasts
* restructured design settings

= 4.2.4 =

* WP 6.3 compatibility

= 4.2.3 =

* some Freemius integration improvements

= 4.2.2 =

* improved logout button markup
* added action after validating password list hash
* Freemius SDK update to 2.5.10

= 4.2.1 =

* improved admin UI with permanent sidebar
* improved value handling for margin/padding to avoid PHP notices
* added filter to validate payment before sending e-mail (pro-only)

= 4.2 =

* selling and generating passwords with WooCommerce (pro-only)
* assign and manage multiple passwords lists (pro-only)
* hotfix editing areas with Oxygen Builder
* helper methods to automatically generate and add passwords to lists
* statistics for password usage + custom database table
* expiration statistics for passsword lists
* fixed area shortcode inspector controls
* GPDR friendly tracking implementation

= 4.1.4 =

* reverted hcaptcha integration
* updated admin links to new URL structure
* fixed expiration settings with new encryption
* fixed PHP notice if reCaptcha doesn't return a response

= 4.1.3.1 =

* v4 API integration for Bit.ly

= 4.1.3 =

* fixed conditional for unlock links
* support for additional URL parameters in cache friendly URLs
* prevent multiple renders in quick edit
* hcaptcha with checkbox
* removed default margin from CSS
* copy shortcode with fallback for Block Editor
* removed deprecated compatibility method

= 4.1.2 =

* fallback solution to get post id in classic editor
* fixed saving meta data in classic editor
* compatibility with disable gutenberg plugin

= 4.1.1 =

* fixed regex pattern in deprecated shortcode
* removed regex pattern for captcha as the feature no longer exists

= 4.1 =

* protect child pages
* quick edit and bulk edit pages/posts for protection (pro-only)
* hCaptcha protection (pro-only)
* preventing PHP notices with concurrent usage and recaptcha
* better dynamics for admin column + less intrusive styling

= 4.0.1 =

* fixed reCAPTCHA selection not saving in admin
* improved fallback margin/padding for protection block
* improved description of the unlock mode to make it easier to understand

= 4.0 =

* entirely new admin UI rewritten with React
* custom block to select areas
* ability to generate passwords
* improved global protection UI
* ability to exlude pages from global protection
* on-the-fly unlock link generation

= 3.5.5.7 =

* modified Freemius prefix to prevent compatibility errors with Post SMTP plugin

= 3.5.5.6 =

* fixed Elementor integration with areas.

= 3.5.5.5.2 =

* improved fallback solution to convert base64 to hmac
* changed validation priority: cookies - links - post data for quicker validation

= 3.5.5.5.1 =

* integrated converter to automatically convert old link encryption to new hashed encryption
* fixed missing hash_nonce value in wp_localize_scripts

= 3.5.5.5 =

* dynamic version number for cache busting after update
* new encryption for encrypted links
* cleared up upgrade/activation code
* includes + load_textdomain in plugins_loaded
* fixed task priority with global protection and redirect
* fixed ReCaptcha v2 validation and content return statement
* better default settings


= 3.5.5.4 =

* improved hmac validation with cookies
* fixed reload in combination with global page protection
* introduced a unique secret key per installation
* reverted Rest API implementation and used Ajax instead

= 3.5.5.3.1 =

* fix for captcha/recaptcha validation with hew hmac encryption

= 3.5.5.3 =

* fixed escaping area id in shortcode
* implemented concurrent logins feature
* encryption for cookies with unique secret key (hmac)
* dedicated ajax class to handle validation
* Rest API implementation for password encryption
* general code cleanup (better performance + improved doc blocks)
* consistent singletone pattern for all classes
* better check for areas and full page protection (improved security)
* latest freemius SDK
* improved cookie-js implementation with sameSite attributes
* fixed logo font rendering

= 3.5.5.2 =

* filter to disable base64 encryption for cookies and links
* Freemius SDK update
* jQuery migrate fix for captcha
* improved escaping of shortcode attributes (area and password lists)

= 3.5.5.1 =

* better permission check settings page
* better permission check metaboxes
* improved german translation
* added redirect parameter and settings
* updated cookie js for better compatibility
* added support for WooCommerce products and shop pages
* filter to allow spaces in passwords
* fixed version number

= 3.5.4 =

* fixed notice for checking areas
* updated dependencies
* fixed security issue in is_valid()
* fixed validation with reload option

= 3.5.3 =

* security patch
* better error handling with fade and clear input
* better area restriction
* better performance for password checkups
* removed rych hash dependency
* improved WooCommerce product restriction
* Gutenberg Support for areas
* fixed notice for bitly check
* fixed notice for recaptcha validation

= 3.5.2 =

* fix for shortcode validation capabilities
* improved validation for global protection

= 3.5.1 =
* bugfix for link protection
* pagebuilder editing support for areas
* fixed show password function
* is_valid() for areas
* dynamic {post-id} parameter for shortcodes in AJAX
* hide parameter for areas
* check form values before AJAX submit (required attributes for example)

= 3.5 =

* introduced protected areas
* shortcode configurator in areas
* bugfix: spaces in password lists
* PHP 8 support improvements
* removed auto-updater for options
* automatically add metaboxes to all registered (public) post types
* removed wp_auto_p() for Oxygen Builder support
* removed deprecated Pagebuilder modules (handled with areas now)
* min value for Cookie set to 1 and no negativ values possible
* improved widget support with areas
* performance optimization for large password lists


= 3.4.2 =

* lighter freemius integration
* admin UI improvements
* direct links for documentation and support in admin header

= 3.4.1 =

* added expire by usage and time for password lists (pro only)
* added global password protection
* base64 encryption for cookies
* bugfix for bitly URL toggle (pro only)
* improved uninstall with latest options
* auto activate reload option if pagebuilder is activated

= 3.4 =

* added support to unlock widgets via ajax
* added support to unlock acf fields via ajax
* added shortcode params to page protection (pro only)
* added user restriction to page protection (pro only)
* fixed one-time usage for password lists without ajax (pro only)
* added option to redirect to source URL after link unlock (pro only)

= 3.3.9 =
* latest freemius SDK
* fixed ID parameter for multiple forms per page
* custom headline, ID parameter for Recaptcha v2/v3
* better enqueue for ReCaptcha v2

= 3.3.8 =
* removed old cache busting prevent 404 errors for files
* wp_enqueue_script for ReCaptcha preventing cache issues
* introduced ajax loader to indicate verification
* fixed metabox showing wrong selected password list
* improved admin wording for more clarification
*  updated german translation files

= 3.3.7 =

* WordPress 5.5 compatibility
* Elementor with Ajax mode compatibility
* added WPML config file
* update german translation
* prevent fatal error if ps_run_plugin() is already declared
* number field instead of text for cookie duration
* ReCaptcha without async defer (handled via Caching plugins)
* fixed PHP notice for bitly integration

= 3.3.6 =
* cache-busting for no-ajax mode and cookies
* fixed double docs link
* support option for third-party-shortcodes with pre-render
* removed auto-space from password lists
* new link encryption solution with metabox and bitly
* hide parameter for WPBakery integration
* updated and fixed german translation

= 3.3.5 =
* performance improvements for password lists
* support for Google ReCaptcha v2 with selection
* more efficient ajax handling for different unlock methods.
* auto-update cookie settings if no ajax mode is used.

= 3.3.4.1 =
* more robust regex for various shortcode implementations
* added action to track unlocks with Google Analytics and other tracking solutions

= 3.3.4 =
* fixed additional params to overwrite texts in the shortcode
* fixed empty content while using additional parameters
* added tablepress support for ajax
* implemented old recaptcha parameters for backwards compatibility

= 3.3.3 =
* better compatibility mode with cache busting
* better ReCaptcha integration with ajax and with cookies
* compatibility: full page protection with divi builder
* more reliable way to get valid response via ajax
* mobile-friendly cache-busting after authentication

= 3.3.2 =
* added compatibility mode for forcing reload
* compatibility fix Elementor full page protection
* compatibility fix WpBakery Pagebuilder full page protection
* re-added error message in Customizer
* improved german translation

* fixed captcha loading while not in use
* fixed wrong redirection after activation
* fixed wrong object call for elementor users.

= 3.3.1 =
* fixed captcha loading while not in use
* fixed wrong redirection after activation
* fixed wrong object call for elementor users.

= 3.3 =
* major release
* new admin UI and simplfied settings
* password protection for pages, posts and products
* new captcha solution with canvas objects
* new Google ReCaptcha v3 integration
* removed requirements for PHP sessions for better compatibility
* removed old Google API vendor for better compatibility
* refactored the entire shortcode and submit solution
* ajax-based submit and validation - no page reload required anymore
* fixed cookie solution for captcha, ReCaptcha
* easier template function is_valid() for complete checks of all parameters
* fixed shortcode parameters for headline and id 
* better uninstall cleanup
* intrated metabox for setting Passster settings for complete pages


= 3.2.6.1 =
* cookie for passwords conditional function fixed
* introduced API parameter to elementor and beaver builder
* fixed notice if api not available in helper methods

= 3.2.6 =
* WPBakery Page Builder row protection with correct default values
* new helper class for cookies
* api parameter possibility to add external apis

= 3.2.5 =
* Another VC protection row fix..
* compatibility WPBakery 6.0.5

= 3.2.4 =
* VC row protection fix
* new partly parameter
* cookie set fix and conditional function to check for
* new type hint solution (better jQuery compatibility)
* is_cookie_valid check for all password related protection types
* admin css fixes with prefix


= 3.2.3 =
* Password Lists fix for all page builder
* prevent autoload error if free and premium version installed
* customizer as default values for page builder options
* placeholder now configurable in the customizer

= 3.2.2 =
* fixed captcha notice
* fixed rows shortcode for WPBakery Pagebuilder
* more efficient notice handling in admin area

= 3.2.1 =
* adding the "hide" parameter to hide forms if set and multiple forms used
* compatibility AAM plugin fix for multiple user roles
* captcha is now a free addon - lower php version needed for basic password usage
* check_atts method now working correctly
* WPBakery Pagebuilder addon fix (free)
* WPBakery Pagebuilder addon protect rows (only pro)
* add message for captcha usage
* new (and working) solution for show passwords before submitting

= 3.2.0.6 =
* new AMP support with cookies
* Fixed delete error notice for passster_lists function not exists
* introduced new helper function for AMP set_amp_headers()
* drop db table for sessions if full uninstall option set
* customizer option to show password while typing

= 3.2.0.5 =
* fixed amp notice
* fixed backend_admin_notice error
* fixed customizer for themify ultra theme

= 3.2.0.4 =
* PS_List collision fix

= 3.2.0.3 =
* autoload backupwp collision fix

= 3.2.0.2 =
* SVN fix for missing files
* cookies for conditional functions

= 3.2.0.1 =
* pagebuilder path fix
* admin amp option fix

= 3.2 =
* security patch freemius
* add cookie option for multiple passwords
* add pagebuilder addons in free version
* fix php notices for php 7 support
* remove OptionsHandler class for support older php versions
* add password lists (admin + shortcode)
* update translation files
* added AMP support for all protection types
* improve default values after Installation

= 3.1.9.1 =
* Fix PHP 5.6 upgrader problems
* Moved autoloader up so database upgrade is handeled correctly


= 3.1.9 =
* PHP 5.6 compatibility
* function naming fixes
* optimize session handler class

= 3.1.8 =
* introduce conditional functions for template usage
* completely remove the autofocus
* fixes save settings for user_toggle option
* updates the session handling for captcha to PHP 7.2 compatibility
* prevents autofill for safari, chrome and webkit supported browsers

= 3.1.7 =
* includes fixes for beaver builder module support

= 3.1.6 =
* Support Release
* Fixed multiple passwords runtime
* add customizer notice on Installation
* improved german translation
* add an seprate atts function for more readable code
* add new users addon
* 

= 3.1.5 =
* Support Release
* Add auth parameter for multiple shortcodes per page
* Fixed <span> for error messages
* Fixed wp_enqueue_styles for windows servers
* Fixed php notice for captcha options

= 3.1.4 =
* Support Release
* fixed problems with WP Sessions table and Database Handler
* fixed License Activation
* Add option for autofocus
* fixed helper for addon activation

= 3.1.3 =
* Support Release
* Major improvements for captcha
* set width and height for captcha
* integrate wp-sessions-manager for session handling via database
* adding page builder support for elementor, WPBakery Pagebuilder and beaver builder (pro only)
* fix one pager bug with passster forms

= 3.1.2 =
* Support Release
* Add placeholder and button label per shortcode
* Fix option set issues for captcha
* get rid of HTTP API and all external calls and replace with object cache

= 3.1.1 =
* Support Release
* Fixing PHP notice for addons
* replace_file_get_contents() with WP HTTP API

= 3.1 =
* new admin ui
* captcha is back!
* cache-compatible cookie solution
* design modifications via customizer
* cross-browser-compatible forms
* shortcode generator
* password generation with newset bcrypt standards
* password generator
* fix several bugs like instructions text, translations, php errors

= 3.0 =
* under new development
* compatibilty with WordPress 4.9+
* clean up and restructure whole plugin
* remove deprecated solutions for ajax and captcha
* removed date based selection of cookie expires

= 2.11 =
* Setting "Password Field Placeholder" now accessible through "Settings -> Passster -> Password/CAPTCHA Field"

= 2.10 =
* Form and CAPTCHA instructions moved to outside the form.
* `content_protector_unlocked_content` filter bug in AJAX mode fixed.
* CSS for `div.content-protector-form-instructions` fixed.
* New Setting "CAPTCHA Case Insensitive" - to allow users to enter CAPTCHAs w/o case-sensitivity.
* New action `content_protector_ajax_support` - for loading any extra files needed to support your protected content in AJAX mode.

= 2.9.0.1 =
* Fixed bug crashing `content_protector_unlocked_content` filter.
* Full AJAX support for `[caption]` built-in shortcode.

= 2.9 =
* Full AJAX support for `[embed]`, `[audio]`, and `[video]` built-in shortcodes.
* Added full support for `[playlist]` and `[gallery]` built-in shortcodes.
* Fixed Encrypted Passwords Storage setting message bug.
* `content_protector_content` filter now called `content_protector_unlocked_content`.
* `content_protector_unlocked_content` filter can now be customized from the Settings -> General tab.
* `the_content` filter now applied to form and CAPTCHA instructions.

= 2.8 =
* Partial AJAX support for `[embed]`, `[audio]`, and `[video]` built-in shortcodes. (experimental)
* Fixed AJAX error from code refactoring

= 2.7 =
* Displaying Form CSS on unlocked content is now a user option (on the Form CSS tab).
* When saving settings, the Settings page will now remember which tab you were on and load it automatically,
* Fixed potential cookie expiry bug for sessions meant to last until the browser closes (expiry time set explicitly to '0').
* Improved error checking for conflicting settings.
* Some code refactoring.

= 2.6.2 =
* Fixed output buffering bug for access form introduced in 2.6.1.

= 2.6.1 =
* Fixed AJAX security nonce bugs.

= 2.6 =
* jQuery UI theme updated to 1.11.4
	
= 2.5.0.1 =
* New setting to manage encrypted passwords transient storage.
* New settings for Password/CAPTCHA Fields character lengths.
* Improved option initialization and cleanup routines.
* `content-protector-ajax.js` now loads in the footer.
* WPML/Polylang compatibility (beta).
* New partial translation into Serbian (Latin); thanks to Andrijana Nikolic from WebHostingGeeks (Novi parcijalni prevod na Srpski ( latinski ); Hvala Andrijana Nikolic iz WebHostingGeeks)

= 2.5 =
* Skipped

= 2.4 =
* Skipped

= 2.3 =
* Settings admin page now limited to users with `manage_options` permission (i.e., admin users only).
* Fixed bug where when using AJAX and CAPTCHA together, CAPTCHA image didn't reload on incorrect password.
* New settings: use either a text or password field for entering passwords/CAPTCHAs, and set placeholder text for those fields.
* Added `autocomplete="off"` to the access form.
* Streamlined i18n for date/time pickers (Use values available in Wordpress settings and `$wp_locale` when available, combined *-i18n.js files into one).

= 2.2.1 =
* Fixed AJAX bug where shortcode couldn't be found if already enclosed in another shortcode.
* Clarified error message if AJAX method cannot find shortcode.
* Changed calls from `die()` to `wp_die()`.

= 2.2 =
* Removed `content-protector-admin-tinymce.js` (No need anymore; required JS variables now hooked directly into editor). Fixes incompatibility with OptimizePress.

= 2.1.1 =
* Added custom filter `content_protector_content` to emulate `apply_filter( 'the_content', ... )` functionality for form and CAPTCHA instructions.

= 2.1 =
* Rich text editors for form and CAPTCHA instructions.
* NEW Template/Conditional Tag: `content_protector_is_logged_in()` (See Usage for details).
* Performance improvements via Transients API.

= 2.0 =
* New CAPTCHA feature! Check out the CAPTCHA tab on Settings -> Content Protector for details.
* Improved i18n.
* Various minor bug fixes.
	
= 1.4.1 =
* Dashicons support for WP 3.8 + added. Support for old-style icons in Admin/TinyMCE is deprecated.
* Unified dashicons among all of my plugins.

= 1.4 =
* Added "Display Success Message" option.

= 1.3 =
* Added "Shared Authorization" feature.
* Renamed "Password Settings" to "General Settings".

= 1.2.2 =
* Added support for Contact Form 7 when using AJAX.

= 1.2.1 =
* Fixed label repetition on "Cookie expires after" drop-down menu.

= 1.2 =
* Various CSS settings now controllable from the admin panel.
* Palettes on Settings color controls are now loaded from colors read from the active Theme's stylesheet.  This
should help in choosing colors that fit in with the active Theme.
* Spinner image now preloaded.
* Some language strings changed.

= 1.1 =
* AJAX loading message now customizable.

= 1.0.1 =
* Added required images for jQuery UI theme.
* Fixed some i18n strings.

= 1.0 =
* Initial release.

== Upgrade Notice ==
= 2.8 =
New features and bug fixes. Please upgrade.

= 2.6.1 =
New bug fixes. Please upgrade.

= 2.3 =
New features and bug fixes. Please upgrade.
	
= 2.1.1 =
Added custom filter `content_protector_content` to emulate `apply_filter( 'the_content', ... )` functionality for form and CAPTCHA instructions. Please upgrade.

= 2.1 =
New features. Please upgrade.

= 2.0 =
New features and bug fixes. Please upgrade.

= 1.2.1 =
Fixed label repetition on "Cookie expires after" drop-down menu. Please upgrade.

= 1.0.1 =
Added required images for JQuery UI theme and fixed some i18n strings.

= 1.0 =
Initial release.

== Upgrade Notice ==

= 4.2.13 =
This resolved an issue with the "Activate Protection" option set for the Global protection page.