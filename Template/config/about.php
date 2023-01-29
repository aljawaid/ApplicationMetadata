<div class="about-page">
    <h2 class="app-header">
        <?php if (!empty($this->task->configModel->get('app_rename'))): ?>
            <?= $this->task->configModel->get('app_rename') ?> <?= t('Dashboard') ?>
        <?php else: ?>
            <?= t('My Workspace Dashboard') ?>
        <?php endif ?>
    </h2>

    <?php
    $allProjectsOpen = $this->task->projectModel->getListByStatus(1);
    $allProjectsClosed = $this->task->projectModel->getListByStatus(0);
    $allProjects = $this->task->projectModel->getAll();
    $allPrivateProjects = $this->task->db->table('projects')->eq('is_private', 1)->findAll();
    $allPublicProjects = $this->task->db->table('projects')->eq('is_public', 1)->findAll();
    $allCategories = $this->task->db->table('project_has_categories')->count();
    $allActions = $this->task->db->table('actions')->count();
    $allTasksOpen = $this->task->db->table('tasks')->eq('is_active', 1)->findAll();
    $allTasksClosed = $this->task->db->table('tasks')->eq('is_active', 0)->findAll();
    $allTasks = $this->task->db->table('tasks')->count();
    $allComments = $this->task->db->table('comments')->count();
    $projectFiles = $this->task->db->table('project_has_files')->count();
    $taskFiles = $this->task->db->table('task_has_files')->count();
    $allFiles = ($projectFiles + $taskFiles);
    $allTags = $this->task->tagModel->getAll();
    $allTagsCount = count($allTags);
    $globalTags = $this->model->tagModel->getAllByProject(0);
    $globalTagsCount = count($globalTags);
    $linkLabels = $this->task->linkModel->getAll();
    $linkLabelsCount = count($linkLabels);
    $installedPlugins = $this->task->pluginLoader->getPlugins();
    $installedPluginsCount = count($installedPlugins);
    $userTimezones = $this->task->db->table('users')->findAllByColumn('timezone');
    $userDifferentTimezones = array_unique($userTimezones);
    $userDifferentTimezonesCount = count($userDifferentTimezones);
    $userLanguages = $this->task->db->table('users')->findAllByColumn('language');
    $userDifferentLanguages = array_unique($userLanguages);
    $userDifferentLanguagesCount = count($userDifferentLanguages);
    $allManagers= $this->task->db->table('users')->eq('role', 'app-manager')->findAll();
    $allMembers= $this->task->db->table('users')->eq('role', 'app-user')->findAll();
    $userCount = $this->task->db->table('users')->count();
    $activeUserCount = $this->task->db->table('users')->eq('is_active', 1)->findAll();
    $allGroups = $this->task->groupModel->getAll();
    $allAdmins = $this->task->db->table('users')->eq('role', 'app-admin')->findAll();
    ?>

    <div class="dash-block">
        <div class="box-row">
            <div class="box-wrapper back-copper">
                <div class="box-icon">
                    <svg class="kanban-icon" fill="currentColor" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round"></g><g> <path d="M9,3 L9,21 L15,21 L15,3 L9,3 Z M8,3 L3.5,3 C2.67157288,3 2,3.67157288 2,4.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 L8,21 L8,3 Z M16,3 L16,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,4.5 C22,3.67157288 21.3284271,3 20.5,3 L16,3 Z M1,4.5 C1,3.11928813 2.11928813,2 3.5,2 L20.5,2 C21.8807119,2 23,3.11928813 23,4.5 L23,19.5 C23,20.8807119 21.8807119,22 20.5,22 L3.5,22 C2.11928813,22 1,20.8807119 1,19.5 L1,4.5 Z M4,6 L6,6 C6.55228475,6 7,6.44771525 7,7 L7,8 C7,8.55228475 6.55228475,9 6,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M4,10 L6,10 C6.55228475,10 7,10.4477153 7,11 L7,12 C7,12.5522847 6.55228475,13 6,13 L4,13 C3.44771525,13 3,12.5522847 3,12 L3,11 C3,10.4477153 3.44771525,10 4,10 Z M11,6 L13,6 C13.5522847,6 14,6.44771525 14,7 L14,8 C14,8.55228475 13.5522847,9 13,9 L11,9 C10.4477153,9 10,8.55228475 10,8 L10,7 C10,6.44771525 10.4477153,6 11,6 Z M18,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L18,9 C17.4477153,9 17,8.55228475 17,8 L17,7 C17,6.44771525 17.4477153,6 18,6 Z M18,10 L20,10 C20.5522847,10 21,10.4477153 21,11 L21,12 C21,12.5522847 20.5522847,13 20,13 L18,13 C17.4477153,13 17,12.5522847 17,12 L17,11 C17,10.4477153 17.4477153,10 18,10 Z M18,14 L20,14 C20.5522847,14 21,14.4477153 21,15 L21,16 C21,16.5522847 20.5522847,17 20,17 L18,17 C17.4477153,17 17,16.5522847 17,16 L17,15 C17,14.4477153 17.4477153,14 18,14 Z M4,7 L4,8 L6,8 L6,7 L4,7 Z M4,11 L4,12 L6,12 L6,11 L4,11 Z M11,7 L11,8 L13,8 L13,7 L11,7 Z M18,7 L18,8 L20,8 L20,7 L18,7 Z M18,11 L18,12 L20,12 L20,11 L18,11 Z M18,15 L18,16 L20,16 L20,15 L18,15 Z M3.5,5 C3.22385763,5 3,4.77614237 3,4.5 C3,4.22385763 3.22385763,4 3.5,4 L6.5,4 C6.77614237,4 7,4.22385763 7,4.5 C7,4.77614237 6.77614237,5 6.5,5 L3.5,5 Z M10.5,5 C10.2238576,5 10,4.77614237 10,4.5 C10,4.22385763 10.2238576,4 10.5,4 L13.5,4 C13.7761424,4 14,4.22385763 14,4.5 C14,4.77614237 13.7761424,5 13.5,5 L10.5,5 Z M17.5,5 C17.2238576,5 17,4.77614237 17,4.5 C17,4.22385763 17.2238576,4 17.5,4 L20.5,4 C20.7761424,4 21,4.22385763 21,4.5 C21,4.77614237 20.7761424,5 20.5,5 L17.5,5 Z"></path> </g>
                    </svg>
                </div>
                <div class="box-title"><?= t('Projects') ?></div>
                <div class="box-data">
                    <span class="data-value data-open" title="Open"><?= count($allProjectsOpen) ?></span>
                    <span class="data-value data-closed" title="Closed"><?= count($allProjectsClosed) ?></span>
                    <span class="data-value data-totals cursor" title="Total Projects"><?= count($allProjects) ?></span>
                </div>
            </div>
            <div class="box-wrapper back-copper">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Personal Projects') ?></div>
                <div class="box-data"><span class="data-value"><?= count($allPrivateProjects) ?></span></div>
            </div>
            <div class="box-wrapper back-copper">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Public Projects') ?></div>
                <div class="box-data"><span class="data-value"><?= count($allPublicProjects) ?></span></div>
            </div>
            <div class="box-wrapper back-copper">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title">Categories</div>
                <div class="box-data"><span class="data-value"><?= $allCategories ?></span></div>
            </div>
            <div class="box-wrapper back-copper">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Automatic Actions') ?></div>
                <div class="box-data"><span class="data-value"><?= $allActions ?></span></div>
            </div>
            <div class="box-wrapper back-green">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Plugins') ?></div>
                <div class="box-data"><span class="data-value"><?= $installedPluginsCount ?></span></div>
            </div>
            <div class="box-wrapper back-orange">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Tasks') ?></div>
                <div class="box-data">
                    <span class="data-value data-open" title="Open Tasks"><?= count($allTasksOpen) ?></span>
                    <span class="data-value data-closed" title="Closed Tasks"><?= count($allTasksClosed) ?></span>
                    <span class="data-value data-totals cursor" title="Total Tasks"><?= $allTasks ?></span>
                </div>
            </div>
            <div class="box-wrapper back-orange">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Comments') ?></div>
                <div class="box-data"><span class="data-value"><?= $allComments ?></span></div>
            </div>
            <div class="box-wrapper back-orange">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Attachments') ?></div>
                <div class="box-data"><span class="data-value"><?= $allFiles ?></span></div>
            </div>
            <div class="box-wrapper back-purple">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title">Tags</div>
                <div class="box-data">
                    <span class="data-value data-project" title="Project Tags"><?= $allTagsCount - $globalTagsCount ?></span>
                    <span class="data-value data-global" title="<?= t('Global Tags') ?>"><?= $globalTagsCount ?></span>
                    <span class="data-value data-totals" title="Total Tags"><?= $allTagsCount ?></span>
                </div>
            </div>
            <div class="box-wrapper back-grey">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Link Labels') ?></div>
                <div class="box-data">
                    <span class="data-value" title="Link Label Pairs"><?= $linkLabelsCount/2 ?></span>
                    <span class="data-value data-totals" title="Total Links"><?= $linkLabelsCount ?></span>
                </div>
            </div>
            <div class="box-wrapper back-red">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('User Groups') ?></div>
                <div class="box-data"><span class="data-value"><?= count($allGroups) ?></span></div>
            </div>
            <div class="box-wrapper back-red">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('User Timezones') ?></div>
                <div class="box-data"><span class="data-value"><?= $userDifferentTimezonesCount-1 ?></span></div>
            </div>
            <div class="box-wrapper back-red">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('User Languages') ?></div>
                <div class="box-data"><span class="data-value"><?= $userDifferentLanguagesCount-1 ?></span></div>
            </div>
            <div class="box-wrapper back-red">
                <div class="box-icon">
                    <svg version="1.1" class="user_icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 409.165 409.164" xml:space="preserve">
                        <g id="" stroke-width="0"></g>
                        <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id=""> <g> <g> <path d="M204.583,216.671c50.664,0,91.74-48.075,91.74-107.378c0-82.237-41.074-107.377-91.74-107.377 c-50.668,0-91.74,25.14-91.74,107.377C112.844,168.596,153.916,216.671,204.583,216.671z"></path> <path d="M407.164,374.717L360.88,270.454c-2.117-4.771-5.836-8.728-10.465-11.138l-71.83-37.392 c-1.584-0.823-3.502-0.663-4.926,0.415c-20.316,15.366-44.203,23.488-69.076,23.488c-24.877,0-48.762-8.122-69.078-23.488 c-1.428-1.078-3.346-1.238-4.93-0.415L58.75,259.316c-4.631,2.41-8.346,6.365-10.465,11.138L2.001,374.717 c-3.191,7.188-2.537,15.412,1.75,22.005c4.285,6.592,11.537,10.526,19.4,10.526h362.861c7.863,0,15.117-3.936,19.402-10.527 C409.699,390.129,410.355,381.902,407.164,374.717z"></path> </g> </g> </g>
                    </svg>
                </div>
                <div class="box-title"><?= t('Users') ?></div>
                <div class="box-data">
                    <span class="data-value data-active" title="Active Users"><?= count($activeUserCount) ?></span>
                    <span class="data-value data-disabled" title="Disabled Users"><?= ($userCount - count($activeUserCount)) ?></span>
                    <span class="data-value data-totals" title="Total Users"><?= $userCount ?></span>
                </div>
            </div>
            <div class="box-wrapper back-red">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Members') ?></div>
                <div class="box-data"><span class="data-value"><?= count($allMembers) ?></span></div>
            </div>
            <div class="box-wrapper back-red">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Managers') ?></div>
                <div class="box-data"><span class="data-value"><?= count($allManagers) ?></span></div>
            </div>
            <div class="box-wrapper back-red">
                <div class="box-icon"><i class="fa fa-fw fa-folder" aria-hidden="true"></i></div>
                <div class="box-title"><?= t('Administrators') ?></div>
                <div class="box-data"><span class="data-value"><?= count($allAdmins) ?></span></div>
            </div>
        </div>
    </div>

    <div class="page-header">
        <h2 class=""><?= t('Platform') ?></h2>
    </div>
    <div class="panel">
        <ul class="">
            <li class="">
                <?= t('Official website:') ?>
                <a href="https://kanboard.org/" target="_blank" rel="noopener noreferrer">https://kanboard.org/</a>
            </li>
            <li class="">
                <?= t('Author:') ?>
                <strong>Frédéric Guillot</strong> (<a href="https://github.com/kanboard/kanboard/graphs/contributors" target="_blank" rel="noopener noreferrer"><?= t('contributors') ?></a>)
            </li>
            <li class="">
                <?= t('License') ?>
                <a href="#LicenseMIT" title="View License">MIT</a>
            </li>
        </ul>
    </div>

    <?= $this->hook->render('template:config:about') ?>

    <div class="page-header">
        <h2><?= t('Configuration') ?></h2>
    </div>
    <div class="panel">
        <ul class="">
            <li class="">
                <?= t('Application version:') ?>
                <strong><?= APP_VERSION ?></strong>
            </li>
            <li class="">
                <?= t('PHP version:') ?>
                <strong><?= PHP_VERSION ?></strong>
            </li>
            <li class="">
                <?= t('PHP SAPI:') ?>
                <strong><?= PHP_SAPI ?></strong>
            </li>
            <li class="">
                <?= t('HTTP Client:') ?>
                <strong><?= Kanboard\Core\Http\Client::backend() ?></strong>
            </li>
            <li class="">
                <?= t('OS version:') ?>
                <strong><?= @php_uname('s').' '.@php_uname('r') ?></strong>
            </li>
            <li class="">
                <?= t('Database driver:') ?>
                <strong><?= DB_DRIVER ?></strong>
            </li>
            <li class="">
                <?= t('Database version:') ?>
                <strong><?= $this->text->e($db_version) ?></strong>
            </li>
            <li class="">
                <?= t('Browser:') ?>
                <strong><?= $this->text->e($user_agent) ?></strong>
            </li>
        </ul>
    </div>

    <?php if (DB_DRIVER === 'sqlite'): ?>
        <div class="page-header">
            <h2 class=""><?= t('Database') ?></h2>
        </div>
        <div class="panel">
            <ul class="">
                <li class="">
                    <?= t('Database size:') ?>
                    <strong><?= $this->text->bytes($db_size) ?></strong>
                </li>
                <li class="">
                    <?= $this->url->link(t('Download the database'), 'ConfigController', 'downloadDb', array(), true) ?>&nbsp;
                    <?= t('(Gzip compressed Sqlite file)') ?>
                </li>
                <li class="">
                    <?= $this->url->link(t('Upload the database'), 'ConfigController', 'uploadDb', array(), false, 'js-modal-medium') ?>
                </li>
                <li class="">
                    <?= $this->url->link(t('Optimize the database'), 'ConfigController', 'optimizeDb', array(), true) ?>&nbsp;
                    <?= t('(VACUUM command)') ?>
                </li>
            </ul>
        </div>
    <?php endif ?>

    <div class="page-header">
        <h2 id="LicenseMIT" class=""><?= t('License') ?></h2>
    </div>
    <div class="panel">
        <details class="license">
            <summary>Application License</summary>
            <br>
            <?= nl2br(file_get_contents(ROOT_DIR.DIRECTORY_SEPARATOR.'LICENSE')) ?>
        </details>
    </div>
</div>
