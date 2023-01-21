![Last Commit](https://img.shields.io/github/last-commit/SenkaWolf/Discord-Bot-Website-Template?style=for-the-badge) ![Open Issues](https://img.shields.io/github/issues/SenkaWolf/Discord-Bot-Website-Template?style=for-the-badge) ![Forks](https://img.shields.io/github/forks/SenkaWolf/Discord-Bot-Website-Template?style=for-the-badge)
Please Support Me: [![](https://img.shields.io/endpoint?url=https://raw.githubusercontent.com/mudlabs/shieldsio/endpoint/badges/paypal-me.json)](https://www.paypal.me/SenkaWolf)


# Discord Bots Website Template
Stunning website template with a basic UI design for any new Discord bots projects or can be adapted to suit any need. It is built with Bootstrap and comes with some ready-made pages.

Demo: https://demo-discordbot-website-template.senkawolf.com

## Changes Made to this fork
* Basic Edits
	* Fixed spelling mistakes.
	* Folder restructure.
	* Additional comments added across files for easier understanding on how the code works or what the code is used for.
* Code Edits
	* Code layout tweaks.
	* Improved some alignments of certian elements.
	* Converted pages to php.
	* Made header, navbars, footer and javascript includes to reduce repeated code in files.
	* PHP code added to set active class on navbar.
	* PHP code added to auto increment the copyright year.
* CSS Edits
	* Removed text-info & text-primary bootstrap classes from pages and specified custom ones for easier colour rebranding using style.css.
	* Moved all accent colour CSS code to the top of style.css for easier modification.
	* Added fontawesome v6.2.1.
		* Command page used fontawesome icons however it wasn't setup orginally.
		* Changed Bootstrap icons to fontawesome icons.
* Other Edits
	* Apache htaccess file added.

## Screenshots

![Index](https://raw.githubusercontent.com/SenkaWolf/Discord-Bot-Website-Template/Main/screenshots/index.png)
![Index 2](https://raw.githubusercontent.com/SenkaWolf/Discord-Bot-Website-Template/Main/screenshots/index2.png)
![Commands](https://raw.githubusercontent.com/SenkaWolf/Discord-Bot-Website-Template/Main/screenshots/commands.png)
![404 Error](https://raw.githubusercontent.com/SenkaWolf/Discord-Bot-Website-Template/Main/screenshots/404.png)


# Installing
Click Code then press download ZIP. Once you have the ZIP file, extract the files and upload the website folder contents to your servers websites root folder via FTP. Or use whatever method you prefer.

If you already have a `.htaccess` setup then remove the one which comes with this template. If you want to learn more about htaccess files then read up more [here](https://developer.mozilla.org/en-US/docs/Learn/Server-side/Apache_Configuration_htaccess). (Disclaimer: Not Affiliated)

## Built With: 

* [Bootstrap](https://getbootstrap.com/) - The web framework used
* [Jquery](https://jquery.com/) - For scripts
* [Font Awesome 6 v6.2.1](https://fontawesome.com) - For Icons

## How To Use

These pages get included on the index and command page. This allows you to update one file and all pages will reflect the change.
* To edit the header go to `includes/header.php` - Contains meta tags, favicon, CSS and Scripts. _Specific page related CSS files or title meta tags are excluded from this file._
* To edit the index navbar go to `includes/navbar-index.php` - Contains navbar and should **only be included on the index**.
* To edit any other navbar go to `includes/navbar-pages.php` - Contains navbar and should be used on all pages **except the index**.
* To edit the footer go to `includes/footer.php` - Contains all code for the footer....
* To edit any javascript includes go to `includes/javascript.php` - Contains all the mandatory javascript code. _Specific page related javascript code are excluded from this file._

If you want to change the websites accent colours then edit the following sections within `assets/css/style.css`
```CSS
:root {
	--bs-accent-rgb: 214,51,132;
}

.text-accent-colour {
	--bs-text-opacity: 1;
	color: rgba(var(--bs-accent-rgb),var(--bs-text-opacity))!important;
}

/* Button with Outline */
.btn-outline-accent {
	color: #d63384;
	border-color: #d63384;
}

.btn-outline-accent:hover {
	color: #fff;
	background-color: #d63384;
	border-color: #d63384;
}

/* Solid Button */
.btn-accent {
	color: #000;
	background-color: #d63384;
	border-color: #d63384;
}

.btn-accent:hover {
	color: #fff;
	background-color: #cb0266;
	border-color: #cb0266;
}

/* Scrollbar Colours */
::-webkit-scrollbar {
	width: 10px;
	color: #ffffff;
}

::-webkit-scrollbar-track {
	background: #212529;
}

::-webkit-scrollbar-thumb {
	background: #d63384;
	border-radius: 30px;
}

::-webkit-scrollbar-thumb:hover {
	background: #cb0266;
}


/* -- Commands CSS -- */

/* Change the horizontal rule (line) on command page */
hr {
  border: 1px solid #d63384;
  margin: 1rem;
  opacity: .25;
}

/* Select Commands Category buttons - You don't need to edit this section*/
.btn-commandscategory {
	text-align: left;
	background-color: transparent;
	border: 1px solid transparent;
	color: #b1b1b1;
}

/* The colour when hover over a Commands Category button */
.btn-commandscategory:hover {
	background-color: #d633842e; /* Make sure this colour is about 75% opaque for good looking results */
	border: 1px solid #d633842e; /* Make sure this colour is about 75% opaque for good looking results */
}

/* The colour when a Commands Category button is active */
.btn-check:active+.btn-commandscategory,.btn-check:checked+.btn-commandscategory,.btn-commandscategory.active,.btn-commandscategory:active,.show>.btn-commandscategory.dropdown-toggle {
	color: #fff;
	background-color: #d63384;
	border-color: #d63384;
}

/* The colour outline when you focus on the search box */
.search-box:focus {
	border: 2px solid #d63384;
}

```

## Authors

Created By [Hadi-Koubeissi](https://github.com/Hadi-Koubeissi)
Modified By [Senka Wolf](https://github.com/SenkaWolf)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details