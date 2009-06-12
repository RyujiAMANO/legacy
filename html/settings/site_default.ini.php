<?php
/**

[Cube]
Root=XOOPS_ROOT_PATH
Controller=Legacy_Controller
#SystemModules=system,legacy,user,legacyRender
SystemModules=legacy,legacyRender,user,profile,stdCache
RecommendedModules=message
RoleManager=Legacy_RoleManager
Salt=XOOPS_SALT

#
# You can register plural render systems.
#
[RenderSystems]
Legacy_RenderSystem=Legacy_RenderSystem
Legacy_AdminRenderSystem=Legacy_AdminRenderSystem

[Legacy]
AutoPreload=1
Theme=admin
AllowDBProxy=true
IsReverseProxy=false

#                  #
# Primary Preloads #
#                  #

[Legacy.PrimaryPreloads]
protectorLE_Filter=/modules/legacy/preload/protectorLE/protectorLE.class.php
Legacy_SystemModuleInstall=/modules/legacy/preload/Primary/SystemModuleInstall.class.php
Legacy_SiteClose=/modules/legacy/preload/Primary/SiteClose.class.php
User_PrimaryFilter=/modules/user/preload/Primary/Primary.class.php
Legacy_NuSoapLoader=/modules/legacy/preload/Primary/NuSoapLoader.class.php
Legacy_SessionCallback=/modules/legacy/preload/Primary/SessionCallback.class.php

#            #
# components #
#            #

[Legacy_Controller]
path=/modules/legacy/kernel
class=Legacy_Controller

[Legacy_RenderSystem]
path=/modules/legacyRender/kernel
class=Legacy_RenderSystem
SystemTemplate=system_comment.html, system_comments_flat.html, system_comments_thread.html, system_comments_nest.html, system_notification_select.html, system_dummy.html, system_redirect.html
SystemTemplatePrefix=legacy

[Legacy_AdminRenderSystem]
path=/modules/legacyRender/kernel
class=Legacy_AdminRenderSystem
ThemeDevelopmentMode=false

[Legacy_RoleManager]
path=/modules/legacy/kernel
class=Legacy_RoleManager

*/
?>
