<?php
# This file was automatically generated by the MediaWiki 1.39.7
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See docs/Configuration.md for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "نوین‌واژه";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

// Define an array of actions to be used in the loop
$actions = [
	'edit',
	'watch',
	'unwatch',
	'delete',
	'revert',
	'rollback',
	'protect',
	'unprotect',
	'markpatrolled',
	'render',
	'submit',
	'history',
	'purge',
	'info',
];
// Assign a path for each action in the array
foreach ( $actions as $action ) {
  $wgActionPaths[$action] = "/wiki/$1/$action";
}
// Assign a path for the 'view' action
$wgActionPaths['view'] = "/wiki/$1";
// Set the article path to the 'view' action path
$wgArticlePath = $wgActionPaths['view'];

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost:8000";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/public/logo.svg",
	'icon' => "$wgResourceBasePath/public/icon.svg",
];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "db";
$wgDBname = "novinvajeh_db";
$wgDBuser = "novinvajeh";
$wgDBpassword = "novinvajeh_password";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
// Allow MP3 files
$wgFileExtensions[] = 'mp3';
// Allow all image formats
$wgFileExtensions = array_merge($wgFileExtensions, ['png', 'gif', 'jpg', 'jpeg', 'svg', 'bmp']);
// Set the upload directory to /var/www/html/mediafiles
$wgUploadDirectory = "$IP/mediafiles";
// Set the maximum upload file size to 2MB
$wgMaxUploadSize = 2 * 1024 * 1024; // 2MB in bytes

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "fa";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "3e2b184a412261791c552a6d4d5a792a3a351beacaac689326362d7f0ed3c790";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "90c7f5084c2fe78c";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-nc-sa/4.0/";
$wgRightsText = "اشتراک گذاری یکجور استناد رایج سازندهٔ غیر تجاری";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-nc-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'Linter' );
wfLoadExtension( 'Math' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'PageImages' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SecureLinkFixer' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'UniversalLanguageSelector' );
wfLoadExtension( 'Variables' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );


# End of automatically generated settings.
# Add more configuration options below.

$wgGroupPermissions['sysop']['interwiki'] = true;

# TimedMediaHandler
wfLoadExtension( 'TimedMediaHandler' );
$wgFFmpegLocation = '/usr/bin/ffmpeg'; // Most common ffmpeg path on Linux
