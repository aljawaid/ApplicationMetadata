# ApplicationBranding

#### _Plugin for [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software")_

This plugin will rename your installation to \'My Workspace\' and include matching device icons in the site metadata for a better user experience. A revamped login page, with a new Admin Dashboard showing global installation activity data with corrected page titles will give a more professional appeal across the site and when sharing links.


Features
-------------

**Rename Application**
- Rename your installation of Kanboard
 - Choose your own name or allow the default `My Workspace` to be used
 - Browser bookmarks and browser tabs now include the site name

**Application Metadata**
- Favicons included for all common devices
- Include generic logo in the top left corner of the site (header)

**Manual Edits**
- Added `domain.com/manual-edits` for easier bookmarks and direct links (if url rewriting is enabled)
- Show list of manual changes required for complete rebranding

**New Login Page**
- Show User IP Address
- Show application name and copyright
- Include metadata and generic logo (for when sharing links)
- Show Unsplash image background
- Move your mouse over the username and password fields to automatically save time selecting the field

**New Reset Password Page**
- Show User IP Address
- Add user friendly page title
- Show application name and copyright
- Include metadata and generic logo (for when sharing links)
- Show Unsplash image background
- Move your mouse over the username and captcha fields to automatically save time selecting the field

**New 2FA Page**
- Show User IP Address
- Add user friendly page title
- Include metadata and generic logo (for style consistency)
- A complete revamp of the two factor code check page which shows after login
- Added links to cancel the security check by returning to the login page, unlocking the default login-lock behaviour
- Added `domain.com/security-check` for easier bookmarks and direct links (if url rewriting is enabled)
- Move your mouse over the password field to automatically save time selecting the field

**Reset Password Email**
- Show application name and copyright
- Compatible with [KanboardEmailHistory](https://github.com/aljawaid/KanboardEmailHistory)

**Change Password Page**
- _To be completed_

**New About Page**
- New professional look and feel application dashboard for Admins
  - Add metrics for your Kanboard installation on a global level regardless of projects or tasks
  - Show different types of metrics
- Add new hook
  - `'template:config:about'` is located before the configuration section
- Include relevant links to Kanboard channels in the revamped _Application Platform_ section
- Show button for direct link to detailed configuration from [KanboardSupport](https://github.com/aljawaid/KanboardSupport) (if installed)


Screenshots
----------

**Login Page**  

![Login Page](../master/Screenshots/screenshot-login.png "A new user friendly login page")

**2FA Security Check Page**  

![TOTP  Page](../master/Screenshots/screenshot-otp.png "A new user friendly two-factor security check page")

**Reset Password Page**  

![Reset Password Page](../master/Screenshots/screenshot-reset.png "A new user friendly reset password page")

**Page Titles**  

![Page Titles](../master/Screenshots/screenshot-browser-tabs.png "Browser tabs and bookmarks contain the page title")

**Page Titles - _Reset Password_**  

![Reset Password](../master/Screenshots/screenshot-browser-tabs-reset-password.png "Reset password page now includes the page title")

**Settings**  

![Rename Application](../master/Screenshots/screenshot-settings.png "Settings")

**Settings - Metadata**  

![Metadata](../master/Screenshots/screenshot-metadata.png "Metadata")

**About - Admin Dashboard**  

![Admin Dashboard](../master/Screenshots/screenshot-admin-dashboard.png "Admin Dashboard")


Usage
-------------

- The Admin Dashboard is shown in `Settings` &#10562; `About`
- Share the login page, reset password page or a public task. Note the icon and meta information.
- The generic My Workspace icon will show in the top header of the site
- Browser page titles and tabs will be more consistent


Compatibility
-------------

- Requires [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software") ≥`1.2.20`

#### Other Plugins & Action Plugins
- Compatible with [KanboardEmailHistory](https://github.com/aljawaid/KanboardEmailHistory), [AutomaticActionUX](https://github.com/aljawaid/AutomaticActionUX), [PluginManager](https://github.com/aljawaid/PluginManager), [TagManager](https://github.com/aljawaid/TagManager), [KanboardSupport](https://github.com/aljawaid/KanboardSupport)
#### Core Files & Templates
- `08` Template overrides
- _No database changes_


Changelog
---------

Read the full [**Changelog**](../master/changelog.md "See changes")
 

Installation
------------

- **Install via the [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software") Plugin Directory**
  - _Go to:_
    - Kanboard: `Plugins` &#10562; `Plugin Directory`
  - _or with [PluginManager](https://github.com/aljawaid/PluginManager) installed:_
    - Kanboard: `Settings` &#10562; `Plugins` &#10562; `Plugin Directory`

**_or_**

- **Install via the [Releases](../master/Releases/ "A copy of each release is saved in the folder") folder**
  - A copy of each release is saved in the `/Releases` folder of the repository
  - Simply extract the `.zip` file into the `/plugins` directory

**_or_**

- **Install via [GitHub](https://github.com/aljawaid "Find the correct plugin from the list of repositories")**
  - Download the `.zip` file and decompress everything under the directory `/plugins`
  - The folder inside the `.zip` must not contain any branch names and must be exact case (matching the plugin name)

_Note: The `/plugins` folder is case-sensitive._

**_or_**

- **Install using Git CLI**
  - `git clone` (_or ftp upload_) and extract the `.zip` file into this folder: `.\plugins\` (must be exact case)


Translations
------------

- English (UK)
- _Contributors welcome_
- _Starter template available_

Authors & Contributors
----------------------

- [@aljawaid](https://github.com/aljawaid) - Author
- _Contributors welcome_


License
-------
- This project is distributed under the [MIT License](../master/LICENSE "Read The MIT license")
