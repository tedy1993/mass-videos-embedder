== WPS Mass Embedder ==

== Translations ==
* Chinese (100%): 348/348 lines translated
* English (100%): 348/348 lines translated
* French (100%): 348/348 lines translated
* German (100%): 348/348 lines translated
* Hindi (100%): 348/348 lines translated
* Italian (100%): 348/348 lines translated
* Portuguese (100%): 348/348 lines translated
* Russian (100%): 348/348 lines translated
* Spanish (100%): 348/348 lines translated

== Changelog ==
= 2.2.1 = 2025-07-07
* Fixed: Fix the issue that caused duplicate videos with XML feeds in search results
* Fixed: Fix translation files issues that could prevent the plugin from installing and work properly in de, en, es, hi, it, ru and zh languages

= 2.2.0 = 2025-03-27
* Added: Add 65 missing translations in all languages (de, en, es, fr, hi, it, pt, ru and zh)
* Fixed: Fix xHamster video search (xHamster has changed its search page structure)
* Fixed: Remove ascii arrows that could cause php errors in options page

= 2.1.0 = 2025-03-19
* Added: Add Hindi translation
* Updated: Update all translations

= 2.0.0 = 2025-03-04
* Added: AI content generation can now be used automatically when importing videos in the search results
* Added: AI content generation can now be used automatically when importing videos in auto-import mode
* Added: New options to choose if you want to use the AI content generation when importing videos in the search results
* Added: New options to choose if you want to use the AI content generation when importing videos in auto-import mode
* Added: New option to import only videos that are ready for the AI content generation in auto-import mode
* Added: New option to stop auto import if no WPS Credit left
* Added: New videos colors in the search results to know instantly if the videos are ready for the AI content generation or not based on their titles
* Added: New videos bulk selector to select all videos, only AI Ready videos or no video in the search results
* Added: New AI content generation section in search result pages to get more details about AI and see your WPS Credits balance
* Updated: Dropping support for PHP 5.6 to 7.1
* Updated: PHP ^7.2 or PHP 8.x is now required
* Updated: PHP ^7.4 or PHP 8.x is recommended
* Updated: WP-Script Core ^5.0.0 required
* Updated: Enhance AI content generation UI in videos search page
* Updated: Enhance general code base by adding types and improving code quality
* Updated: AI content generation feature is now using custom post types instead of WordPress options
* Updated: Improve error handling in video import feature
* Fixed: Fix all issues related to WordPress rest api that could occure when using AI content generation
* Fixed: Fix too small input fields for Search results and Auto import settings in options page
* Fixed: Fix video search list visual issue after some videos are imported
* Fixed: Fix video cards width to be the same in the search results on all devices
* Fixed: Enhance string cleaning function to replace smart quotes with standard quotes in videos titles and descriptions in the search results
* Fixed: Display 4 thumbs per line on wide screens in the search results to prevent any visual issue
* Fixed: Prevent selected partner categories from loading twice when video import page is loaded
* Fixed: Remove unnecessary wp_die() calls from AJAX action handlers

= 1.7.0 = 2024-11-04
* Updated: Simple HTML DOM parser updated to v1.9.1
* Fixed: Fix all issues that could be caused by the old Simple HTML DOM Parser version with new PHP versions

= 1.6.9 = 2024-09-13
* Fixed: Fix issue that prevented to search for videos from Pornhub

= 1.6.8 = 2024-09-10
* Fixed: Fix videos search issue that prevented to find videos on multiple pages on tubes like Redtube, Youporn, Xvideos, etc.
* Fixed: Fix videos search issue that prevented to find videos starting on a page other than the first one

= 1.6.7 = 2024-05-02
* Fixed: Fix options to display embed videos on any third party theme
* Fixed: Fix options that applies the sandbox options on embed videos
* Fixed: Fix tubecorporate tracking links
* Fixed: Fix options to apply outgoinglinks on videos thumbnails

= 1.6.6 = 2024-04-16
* Fixed: Fix Xvideos embed url that could not be retrieved anymore (work for next imports)
* Fixed: Display Xvideos embed video in the search results
* Fixed: Force https on all Xvideos medias (thumbnails, trailer and embed urls)

= 1.6.5 = 2024-03-19
* Added: All videos from new site of TubeCorporate (Ooxxx)
* Added: New filter in the admin videos posts list to filter videos by partner
* Updated: WPS Core v2.3.7 required
* Updated: All TubeCorporate sites categories
* Updated: Remove sandbox option for xHamster because they can detect it and block the embed video
* Fixed: Fix YoupornGay searches (YoupornGay is now part of Youporn under the hood)

= 1.6.4 = 2024-02-13
* Added: Introducing AI powered text generator to create unique titles and descriptions for Adult Videos.
* Added: New buttons to generate titles and descriptions with AI when editing a video in the search results
* Fixed: Outgoing toggle button in saved feeds is now visible when the auto-import option is disabled
* Fixed: Fix Xvideos video search to get the latest videos instead of the most relevant ones to get fresh videos daily
* Fixed: Fix Xvideos thumbnails and trailers urls to avoid mixed media content issues

= 1.6.3 = 2023-09-27
* Updated: Changed do not panic error message when no video is found for some keywords. This is now just a normal message to say that no video were found.
* Fixed: Fix xHamster video search (xHamster has changed its search page structure)
* Fixed: Fix Youporn embed code and tracking urls (Youporn has changed its embed code ids and tracking urls)

= 1.6.2 = 2023-03-08
* Fixed: Fix php error if WP-Script Core is not installed

= 1.6.1 = 2023-03-06
* Added: New domain examples for domain swapping (xhamster.com to xhamster18.desi, pornhub.com to pornhub.org, xvideos.com to xv-videos1.com)
* Updated: Remove Porn Rabbit (removed - no more dump file)
* Updated: Remove Extreme Tube (removed - now redirected to youporn.com)
* Updated: Remove Pornomovies (removed - no more dump file)
* Updated: Remove Got Porn (network closed)
* Fixed: Fix xHamster search for gay and trans videos
* Fixed: Fix Xvideos trailers that could not be found for some videos
* Fixed: Fix embed code on Ice Porn videos
* Fixed: Fix duration on XNXX videos
* Fixed: Fix duration on Flyflv videos
* Fixed: Fix keyword index persistance issue when changing the partner in the dropdown list (this issue ended up to find no results when just changing the partner because the cat id was not refreshed)
* Fixed: Fix php notices on videos search when a video is not found
* Fixed: Fix php error on unlink() in upload trailer code when given value is an error instead of a string
* Fixed: Fix affiliate link for manysex

= 1.6.0 = 2022-11-15
* Updated: Remove sandbox option for desiporn, senzuri and theclassicporn
* Fixed: Fix affiliate links for desiporn, senzuri and theclassicporn

= 1.5.9 = 2022-11-15
* Added: New feature to enable outgoing links on videos of any saved feeds you want (available as a new button in the saved feeds)
* Added: New feature to add domain swapping (available as a new option page - very useful if you use the videos of HubTraffic Network intended for an indian audience)
* Added: New affiliate_id option on all TubeCorporate sites (mandatory to work with the new outgoing link feature - available as a new option field when configuring a TubeCorporate site in the import video admin page)
* Added: All videos from 3 new sites of TubeCorporate (Desiporn, Manysex, Senzuri)
* Updated: All TubeCorporate sites categories (more than 600 new categories are available, all sites combined)
* Updated: All TubeCorporate sites logos have been updated
* Updated: Logos of Pornhub, Redtube, xHamster, Xvideos and Youporn have also been updated
* Fixed: Fix saved feed videos status that could be missing
* Fixed: The link to open a modal to configure a partner that is now working
* Fixed: Fix tracking url on videos of TubeCorporate sites (both existing videos on your site and the next ones you'll import)
* Fixed: Add default value to all options to prevent any bug because of undefined values when options are not saved yet
* Fixed: Fix responsive issues in the video search form
* Fixed: Fix visual issues in the saved feeds list, now using 4 columns instead of 6 in wide screen
* Fixed: Fix footer visual issues in options page

= 1.5.8 = 2022-03-14
* Fixed: Fix auto update issue when the option to download trailers was set

= 1.5.7 = 2022-02-22
* Fixed: Fix false positive video id not found issue. (ie. Any private videos from Redtube could end up to no video results at all)
* Fixed: Fix PHP warnings when searching for videos

= 1.5.6 = 2022-02-14
* Fixed: Auto update error when the option to download trailers is active
* Fixed: Minor bugs

= 1.5.5 = 2022-02-04
* Fixed: PHP Compatibility issues with PHP bellow 7.2
* Fixed: Dropdown menus height is fixed so you can now see the last elements of the menus for partners and categories selection

= 1.5.4 = 2021-12-16
* Added: New option to download video trailer file (when they are available)
* Added: If this new option is not enabled and trailer is available, it only saves its hotlink url
* Added: Trailers are short videos that are played when hovering a video image on a tube site
* Added: Trailers are available with videos from xHmaster, Xvideos, Redtube and Youporn only

= 1.5.3 = 2021-08-03
* Fixed: Manual import that may not import all videos on some servers
* Fixed: JavaScript issue that could prevent the import page to load properly

= 1.5.2 = 2021-07-05
* Fixed: Php fatal error
* Fixed: Php warning when no video is found

= 1.5.1 = 2021-04-15
* Fixed: Redtube duration issue

= 1.5.0 = 2021-04-07
* Updated: Load some partners data from the plugin instead of the api
* Updated: Reduce of 75% the amount of data transfered by the API
* Updated: Prevent MySQL max_allowed_packet issues
* Fixed: Sandbox filter hook now returns a string instead of simple_html object
* Fixed: PHP warnings when the plugin options are empty

= 1.4.9 = 2021-03-18
* Fixed: Video in content theme compatibility now works again

= 1.4.8 = 2021-02-15
* Updated: Forceutf8 for php7.4 compatibility
* Updated: Remove Porn.com (no more iframes)
* Updated: Remove Spankwire (permanent redirection to youporn)
* Fixed: PHP warning when creating a saved feed
* Fixed: PHP warning when no saved feed has been created yet

= 1.4.7 = 2020-11-05
* Fixed: Redtube is now working again.

= 1.4.6 = 2020-07-09
* Added: Multi thumbs on Nuvid
* Fixed: Nuvid import
* Fixed: Deactivation of auto-import for saved feeds whose wordpress category has been deleted
* Fixed: Pornhub user agent that could prevent to retrieve videos

= 1.4.5 = 2020-07-02
* Added: Options to toggle iframe sandbox on mobile
* Fixed: TXXX Thumbnails imported before v1.4.4 (background process when you are in the main plugin page)

= 1.4.4 = 2020-05-26
* Fixed: Redtube trailers are now well retrieved when they are avalable (natively compatible with all wp-script themes)
* Fixed: Third party iframes was sandboxed by error, blocking embed scripts inside of them
* Fixed: Infinite loading on import in some cases caused by meta no referrer tag
* Fixed: Fix xHamster duplicated videos
* Fixed: Videos with no title are now well imported with the default title 'Untitled'

= 1.4.3 = 2020-01-20
* Fixed: Redtube is now working again.

= 1.4.2 = 2019-12-17
* Added: New tube from TubeCorporate - ShemaleZ
* Updated: All TubeCorporate tubes configuration. Now you have to set your campaign source ID instead of your promo ID

= 1.4.1 = 2019-11-21
* Fixed: Xvideos thumbnails and trailers issues for new imports

= 1.4.0 = 2019-08-23
* Fixed: Auto-import run on plugin page

= 1.3.9 = 2019-08-23
* Fixed: Auto-import

= 1.3.8 = 2019-08-22
* Fixed: Thumbs that were not imported with XML feeds on PHP 5.3
* Fixed: Force tooltips to hide

= 1.3.7 = 2019-08-20
* Fixed: Isse with some iframes that prevented the iframe to be displayed

= 1.3.6 = 2019-08-19
* Fixed: Call to undefined function str_get_html() error

= 1.3.5 = 2019-08-19
* Added: Blocking iframe redirects for all integrated partners
* Added: New options to choose exactly the partners whose iframes you want to block
* Added: Add languages/amve_lang.pot file to translate the plugin
* Updated: Xtube has been temporary removed
* Updated: Pornxs has been temporary removed
* Fixed: Visual bug of the fixed search bar when scrolling down
* Fixed: PHP 5.3 error on install
* Fixed: Spankwire videos search
* Fixed: Pornomovies videos search
* Fixed: Pornrabbit videos search

= 1.3.4 = 2019-07-29
* Fixed: Fix xVideos iframes error in the preview modal box after a search. xVideos iframes are well imported but viewable on the frontend only.

= 1.3.3 = 2019-05-23
* Updated: Videos are now retrieved faster thanks to algorithm enhancement
* Fixed: Duplicated videos retrieved when you already have a lot of videos from a partner
* Fixed: Xhamster gay / shemale searches are now more relevant
* Fixed: FlyFlv now works with HTTPS

= 1.3.2 = 2019-01-29
* Fixed: Tags and Actors that where retrieved only in the first video
* Fixed: Memory leaks caused by Tags and Actors detection with some tubes (ie. xHamster)

= 1.3.1 = 2019-01-14
* Updated: Simple HTML DOM parser updated to v1.7
* Updated: VuePaginate.js updated to v3.6
* Fixed: Errors when searching for videos with keywords that contain capital letters
* Fixed: Merged thumbnails imported in auto-import mode (+ background fix for already imported thumbnails)

= 1.3.0 = 2019-01-09
* Fixed: Memory leak issue when searching videos from the biggest Tubes (xHamster, Xvideos, Redtube, Youporn...). Sometimes no video was found. In any case, this will dramatically reduce the load of your server
* Fixed: Saved Feeds loading issue when a WordPress Category used by a saved feed has been removed

= 1.2.9 = 2018-09-14
* Fixed: Pornhub video search

= 1.2.8 = 2018-09-10
* Added: Redtube trailers (natively compatible with all wp-script themes)
* Added: Add xHamster trailers (natively compatible with all wp-script themes)
* Added: Xvideos trailers (natively compatible with all wp-script themes)
* Added: Youporn trailers, when available (natively compatible with all wp-script themes)
* Updated: Search results display (thumbs and trailers details added)

= 1.2.7 = 2018-09-03
* Added: You can now press enter when creating a WordPress category on the fly
* Added: Actors are now auto detected in titles
* Added: You can now use Proxy with authentication
* Added: New options to set up Proxy user and password for proxy authentication
* Fixed: Custom categories selection dropdown when importing is now working
* Fixed: Default partner selection issue after searching videos from a saved feed
* Fixed: Fix mb_detect_encoding PHP function prerequired that prevented the plugin to work when not installed
* Fixed: Fix vPorn searches so they now work again
* Fixed: Remove xHamster thumbnails rotation
* Fixed: Minor bugs

= 1.2.6 = 2018-06-04
* Added: You can now search as many Pornhub videos as you want in any category or with any keywords!
* Updated: Pornhub search results have been enhenced
* Updated: Theme compatibilty options have been enhenced (Custom post type options are now select boxes instead of text fields)
* Fixed: Minor bugs

= 1.2.5 = 2018-06-01
* Added: You can now remove unwanted video from searches (for ever!)
* Added: Details on the response of each video (success, already imported, unwanted, invalid) after a search
* Updated: Minor graphic improvements
* Fixed: Youporn/Youporn Gay search issue when selecting a two words category
* Fixed: Saved Feeds loading issue when a WordPress Category used by a saved feed has been removed
* Fixed: Infinite loading that can occures after migrating from old generation of plugin
* Fixed: Tooltips visual bugs
* Fixed: Minor bugs

= 1.2.4 = 2018-05-24
* Added: Saving selected tab in video detail (Video data or Thumbnails) when switching from a video to an other
* Fixed: Duplicated videos on some search results
* Fixed: Minor bugs

= 1.2.3 = 2018-05-17
* Fixed: Youporn and Youporn Gay thumbnails when importing videos
* Fixed: Minor bugs

= 1.2.2 = 2018-05-15
* Fixed: Issue that prevented enable/disable auto-import option to work properly

= 1.2.1 = 2018-05-14
* Fixed: Issue that prevented partner categories to be loaded with Firefox on slow servers
* Fixed: Fix xhamster video searches that didn't work after xhamster main site changes

= 1.2.0 = 2018-04-27
* Added: Close button to reset search when there is a search error/info alert
* Fixed: Upornia and TubePornClassic thumbs displaying issue
* Fixed: File Max size on Simple Html Dom issue that could prevent some videos searches to work

= 1.1.9 = 2018-04-09
* Added: Saved Feeds counter
* Updated: PornTube removed from the list (their new api data is not compatible anymore)
* Fixed: Befuck videos search issue
* Fixed: JavaScript onload conflict with other plugins that prevented WP-Script pages to load in the admin dashboard
* Fixed: Feeds index JavaScript issues
* Fixed: Minor bugs

= 1.1.8 = 2018-03-20
* Added: Add a new WP category on the fly in the WP category drop-down list (auto filled with the current category or keyword search to save time)
* Added: Switch between two search results display mode, cards like before and list that allow you to edit all videos the fastest way
* Added: Zoom on each thumbnail in the thumbnails tab when editing a video in the search results
* Added: Press enter (or click on the Search videos button) after entering a keyword to start a search the fastest way
* Fixed: Namespace has been added to Bootstrap to prevent conflicts with other plugins
* Fixed: Youjizz duplicated videos in search results
* Fixed: Youjizz embed code is now https
* Fixed: Arabic characters are now well imported
* Fixed: Minor bugs

= 1.1.7 = 2018-02-28
* Updated: PornTube removed from the list (embed player not available anymore)
* Fixed: API calls errors when SERVER_NAME is empty
* Fixed: Minor bugs

= 1.1.6 = 2018-02-21
* Fixed: Auto import maximum execution time exceeded when last page to import is reached

= 1.1.5 = 2018-02-16
* Added: ExtremeTube Tube Partner is now part of the game
* Updated: Tube8 has been removed because its API from Hubtraffic is currently dead
* Updated: Tubes searches have been optimized for manual searches and auto-import
* Fixed: Porn.com now works like a charm (user agent issue fixed)

= 1.1.4 = 2018-02-01
* Fixed: Auto import issue with some categories
* Fixed: Redtube videos search
* Fixed: Xvideos search issue with some categories

= 1.1.3 = 2018-01-26
* Fixed: Error 400 issue when auto-importing videos in some cases

= 1.1.2 = 2018-01-08
* Added: Global Auto Import option to activate or deactivate Auto Import features
* Updated: Better Cron error logs
* Updated: Cron Start and Stop notice logs

= 1.1.1 = 2017-12-28
* Updated: Cron import system
* Fixed: Preventing data import for data uncheked in options
* Fixed: Undefined category when seaching videos from saved feeds whilst data isn't loaded yet
* Fixed: Minor bugs

= 1.1.0 = 2017-12-05
* Added: Error message when detecting that the server IP has been banned from Pornhub / Youporn / Redtube
* Fixed: Undefined keyword when searching from saved feeds
* Fixed: Auto-import feeds with keywords

= 1.0.9 = 2017-12-01
* Added: Player in the content option for maximum themes (others than WP-Script themes) compatibility
* Added: Player before or after the content option
* Fixed: Issue with some PHP versions that prevented feeds to be created or updated

= 1.0.8 = 2017-11-24
* Fixed: Auto-import
* Fixed: Tags that were not imported in auto-import mode

= 1.0.7 = 2017-11-23
* Fixed: Duplicated feeds when searching from a saved feed with tags
* Fixed: Default tag taxonomy that prevented tags to be imported (post_tag instead of tag in the custom taxonomy option)

= 1.0.6 = 2017-11-22
* Fixed: Bug that prevented the plugin sub-menu and tab to be displayed

= 1.0.5 = 2017-11-21
* Added: New option to download or not the main thumb of imported videos
* Updated: WP-Script Core required message enhenced when WP-Script Core is not installed
* Fixed: Fatal error when activating the plugin manually WP-Script Core is not installed
* Fixed: Minor bugs

= 1.0.4 = 2017-11-20
* Added: Server Cron options
* Fixed: Auto-import
* Fixed: Minor bugs

= 1.0.3 = 2017-11-14
* Fixed: Xvideos Partner
* Fixed: XNXX Partner

= 1.0.2 = 2017-11-13
* Added: PornVe Tube Partner

= 1.0.1 = 2017-11-10
* Fixed: Glyphicons 500 error
* Fixed: Minor bugs

= 1.0.0 = 2017-11-02
* Added: Initial release

