<?php
/**
 * Change this to select the environment settings you'd like to run with.
 */
$cfg['environment'] = 'development';

  
/**
 * Setup Environments
 * 
 * The following variables are specific to the environment setup. For example you wouldn't 
 * want debug messages to appear in your production environment. Consider this when adding
 * your own configuration variables
 * 
 * [data_servers]
 * You can add as many data servers as you'd like to distribute load.
 *  driver://username:password@host?name=application&port=0000
 * 
 * [enable_cache]
 * If the cache is disabled then nothing will be cached. This is useful for debugging purposes.
 *  true:   cache is enabled
 *  false:  cache is disabled
 * 
 * [enable_debug]
 * When debugging is enabled debug messages will be displayed. For a development setup this is
 * perfect but you'll want to turn this off for production.
 *  true:   debug messages are displayed
 *  false:  no debug messages are shown. Recommended for production
 */

// development
  $env['development']['data_servers'][]  = 'mysql://root:@localhost?name=madeam';
  $env['development']['enable_cache']    = true;
  $env['development']['enable_debug']    = true;

// production
  $env['production']['data_servers'][]   = 'mysql://root:password@localhost?name=madeam';
  $env['production']['enable_cache']     = true;
  $env['production']['enable_debug']     = false;

  
/**
 * This is the default controller called by the framework. This does NOT support
 * the format "sub/index". Its recommended that you leave this alone unless you really
 * need to change it. (highly unlikely).
 */
$cfg['default_controller'] = 'index';

/**
 * This is the controller's default action that will be called if no other
 * action is requested. This should be left untouched unless unlikely circumstances
 * require that it be something else.
 */
$cfg['default_action']     = 'index';

/**
 * This is the default file extension for Views and Layouts.
 * The "." is not necessary. Only the name.
 */
$cfg['default_format']     = 'html';

/**
 * This is the name of the log files. You can use the date formats from http://ca3.php.net/date 
 * to custome the names and the accuracy of the logs. For example by default it's set to 'Y-m' 
 * which is the year and month but if you want to log it every day you could do 'Y-m-d'. 
 * Obviously if you want to be really crazy you can even identify the logs by seconds.
 */
$cfg['log_file_name']      = 'Y-m';


/**
 * By default madeam always returns a layout when called for the first time. When an ajax call is
 * made its the same as calling madeam for the first time so the layout is called which could break
 * things for you. To avoid including a layout with the content being called set the ajax_layout to "false".
 * By default this is already done for you. To include layouts when making ajax calls set it to "true".
 */
$cfg['enable_ajax_layout']  = false;


/**
 * List of Mime Types.
 */
$cfg['mime_types']         = array(
  "323"   => "text/h323",
  "acx"   => "application/internet-property-stream",
  "ai"    => "application/postscript",
  "aif"   => "audio/x-aiff",
  "aifc"  => "audio/x-aiff",
  "aiff"  => "audio/x-aiff",
  "asf"   => "video/x-ms-asf",
  "asr"   => "video/x-ms-asf",
  "asx"   => "video/x-ms-asf",
  "au"    => "audio/basic",
  "avi"   => "video/x-msvideo",
  "axs"   => "application/olescript",
  "bas"   => "text/plain",
  "bcpio" => "application/x-bcpio",
  "bin"   => "application/octet-stream",
  "bmp"   => "image/bmp",
  "c"     => "text/plain",
  "cat"   => "application/vnd.ms-pkiseccat",
  "cdf"   => "application/x-cdf",
  "cer"   => "application/x-x509-ca-cert",
  "class" => "application/octet-stream",
  "clp"   => "application/x-msclip",
  "cmx"   => "image/x-cmx",
  "cod"   => "image/cis-cod",
  "cpio"  => "application/x-cpio",
  "crd"   => "application/x-mscardfile",
  "crl"   => "application/pkix-crl",
  "crt"   => "application/x-x509-ca-cert",
  "csh"   => "application/x-csh",
  "css"   => "text/css",
  "dcr"   => "application/x-director",
  "der"   => "application/x-x509-ca-cert",
  "dir"   => "application/x-director",
  "dll"   => "application/x-msdownload",
  "dms"   => "application/octet-stream",
  "doc"   => "application/msword",
  "dot"   => "application/msword",
  "dvi"   => "application/x-dvi",
  "dxr"   => "application/x-director",
  "eps"   => "application/postscript",
  "etx"   => "text/x-setext",
  "evy"   => "application/envoy",
  "exe"   => "application/octet-stream",
  "fif"   => "application/fractals",
  "flr"   => "x-world/x-vrml",
  "gif"   => "image/gif",
  "gtar"  => "application/x-gtar",
  "gz"    => "application/x-gzip",
  "h"     => "text/plain",
  "hdf"   => "application/x-hdf",
  "hlp"   => "application/winhlp",
  "hqx"   => "application/mac-binhex40",
  "hta"   => "application/hta",
  "htc"   => "text/x-component",
  "htm"   => "text/html",
  "html"  => "text/html",
  "htt"   => "text/webviewhtml",
  "ico"   => "image/x-icon",
  "ief"   => "image/ief",
  "iii"   => "application/x-iphone",
  "ins"   => "application/x-internet-signup",
  "isp"   => "application/x-internet-signup",
  "jfif"  => "image/pipeg",
  "jpe"   => "image/jpeg",
  "jpeg"  => "image/jpeg",
  "jpg"   => "image/jpeg",
  "js"    => "application/x-javascript",
  "latex" => "application/x-latex",
  "lha"   => "application/octet-stream",
  "lsf"   => "video/x-la-asf",
  "lsx"   => "video/x-la-asf",
  "lzh"   => "application/octet-stream",
  "m13"   => "application/x-msmediaview",
  "m14"   => "application/x-msmediaview",
  "m3u"   => "audio/x-mpegurl",
  "man"   => "application/x-troff-man",
  "mdb"   => "application/x-msaccess",
  "me"    => "application/x-troff-me",
  "mht"   => "message/rfc822",
  "mhtml" => "message/rfc822",
  "mid"   => "audio/mid",
  "mny"   => "application/x-msmoney",
  "mov"   => "video/quicktime",
  "movie" => "video/x-sgi-movie",
  "mp2"   => "video/mpeg",
  "mp3"   => "audio/mpeg",
  "mpa"   => "video/mpeg",
  "mpe"   => "video/mpeg",
  "mpeg"  => "video/mpeg",
  "mpg"   => "video/mpeg",
  "mpp"   => "application/vnd.ms-project",
  "mpv2"  => "video/mpeg",
  "ms"    => "application/x-troff-ms",
  "mvb"   => "application/x-msmediaview",
  "nws"   => "message/rfc822",
  "oda"   => "application/oda",
  "p10"   => "application/pkcs10",
  "p12"   => "application/x-pkcs12",
  "p7b"   => "application/x-pkcs7-certificates",
  "p7c"   => "application/x-pkcs7-mime",
  "p7m"   => "application/x-pkcs7-mime",
  "p7r"   => "application/x-pkcs7-certreqresp",
  "p7s"   => "application/x-pkcs7-signature",
  "pbm"   => "image/x-portable-bitmap",
  "pdf"   => "application/pdf",
  "pfx"   => "application/x-pkcs12",
  "pgm"   => "image/x-portable-graymap",
  "pko"   => "application/ynd.ms-pkipko",
  "pma"   => "application/x-perfmon",
  "pmc"   => "application/x-perfmon",
  "pml"   => "application/x-perfmon",
  "pmr"   => "application/x-perfmon",
  "pmw"   => "application/x-perfmon",
  "pnm"   => "image/x-portable-anymap",
  "pot"   => "application/vnd.ms-powerpoint",
  "ppm"   => "image/x-portable-pixmap",
  "pps"   => "application/vnd.ms-powerpoint",
  "ppt"   => "application/vnd.ms-powerpoint",
  "prf"   => "application/pics-rules",
  "ps"    => "application/postscript",
  "pub"   => "application/x-mspublisher",
  "qt"    => "video/quicktime",
  "ra"    => "audio/x-pn-realaudio",
  "ram"   => "audio/x-pn-realaudio",
  "ras"   => "image/x-cmu-raster",
  "rgb"   => "image/x-rgb",
  "rmi"   => "audio/mid",
  "roff"  => "application/x-troff",
  "rtf"   => "application/rtf",
  "rtx"   => "text/richtext",
  "scd"   => "application/x-msschedule",
  "sct"   => "text/scriptlet",
  "setpay" => "application/set-payment-initiation",
  "setreg" => "application/set-registration-initiation",
  "sh"    => "application/x-sh",
  "shar"  => "application/x-shar",
  "sit"   => "application/x-stuffit",
  "snd"   => "audio/basic",
  "spc"   => "application/x-pkcs7-certificates",
  "spl"   => "application/futuresplash",
  "src"   => "application/x-wais-source",
  "sst"   => "application/vnd.ms-pkicertstore",
  "stl"   => "application/vnd.ms-pkistl",
  "stm"   => "text/html",
  "svg"   => "image/svg+xml",
  "sv4cpio" => "application/x-sv4cpio",
  "sv4crc" => "application/x-sv4crc",
  "t"     => "application/x-troff",
  "tar"   => "application/x-tar",
  "tcl"   => "application/x-tcl",
  "tex"   => "application/x-tex",
  "texi"  => "application/x-texinfo",
  "texinfo" => "application/x-texinfo",
  "tgz"   => "application/x-compressed",
  "tif"   => "image/tiff",
  "tiff"  => "image/tiff",
  "tr"    => "application/x-troff",
  "trm"   => "application/x-msterminal",
  "tsv"   => "text/tab-separated-values",
  "txt"   => "text/plain",
  "uls"   => "text/iuls",
  "ustar" => "application/x-ustar",
  "vcf"   => "text/x-vcard",
  "vrml"  => "x-world/x-vrml",
  "wav"   => "audio/x-wav",
  "wcm"   => "application/vnd.ms-works",
  "wdb"   => "application/vnd.ms-works",
  "wks"   => "application/vnd.ms-works",
  "wmf"   => "application/x-msmetafile",
  "wps"   => "application/vnd.ms-works",
  "wri"   => "application/x-mswrite",
  "wrl"   => "x-world/x-vrml",
  "wrz"   => "x-world/x-vrml",
  "xaf"   => "x-world/x-vrml",
  "xbm"   => "image/x-xbitmap",
  "xla"   => "application/vnd.ms-excel",
  "xlc"   => "application/vnd.ms-excel",
  "xlm"   => "application/vnd.ms-excel",
  "xls"   => "application/vnd.ms-excel",
  "xlt"   => "application/vnd.ms-excel",
  "xlw"   => "application/vnd.ms-excel",
  "xof"   => "x-world/x-vrml",
  "xpm"   => "image/x-xpixmap",
  "xwd"   => "image/x-xwindowdump",
  "z"     => "application/x-compress",
  "zip"   => "application/zip"
);
?>