<?php $this->load->view('pg_admin/header'); ?>
<body class=" sidebar_main_open sidebar_main_swipe">
   <?php $this->load->view('pg_admin/menues'); ?>
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Contact List</h3>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-vertical-align">
                                <div class="uk-vertical-align-middle">
                                    <ul id="contact_list_filter" class="uk-subnav uk-subnav-pill uk-margin-remove">
                                        <li class="uk-active" data-uk-filter=""><a href="#">All</a></li>
                                        <li data-uk-filter="goodwin-nienow"><a href="#">Goodwin-Nienow</a></li>
                                        <li data-uk-filter="strosin groupa"><a href="#">Strosin Groupa</a></li>
                                        <li data-uk-filter="schamberger plc"><a href="#">Schamberger PLC </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <label for="contact_list_search">Search... (min 3 char.)</label>
                            <input class="md-input" type="text" id="contact_list_search"/>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_b uk-text-center grid_no_results" style="display:none">No results found</h3>

            <div class="uk-grid-width-medium-1-2 uk-grid-width-large-1-3 hierarchical_show" id="contact_list">
                <div data-uk-filter="schamberger plc ,arne robel,nader.claudie@yahoo.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_10.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Arne Robel                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Deserunt similique doloremque adipisci iste molestiae necessitatibus hic facilis.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">nader.claudie@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(739)380-0396</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,dr. fannie reichel ii,murphy.rhoda@kreiger.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_04.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Dr. Fannie Reichel II                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Facere dolorem quia ratione esse id odio aut incidunt repudiandae aperiam vel.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">murphy.rhoda@kreiger.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-380-684-7281</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,nia dare,ileannon@emard.org">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_11.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Nia Dare                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Aut vel modi aspernatur consectetur sed animi deserunt non perferendis unde.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">ileannon@emard.org</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(977)608-3871x1385</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,mossie kuvalis,betty.gutkowski@gmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head md-bg-cyan-600">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_02.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center md-color-white">
                                Mossie Kuvalis                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Autem aut aspernatur impedit voluptates et placeat perferendis.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">betty.gutkowski@gmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(417)236-5873</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,zechariah jast dvm,haley.trent@wildermanstoltenberg.biz">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_09.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Zechariah Jast DVM                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Sapiente quidem autem atque iure voluptas et blanditiis odit atque nesciunt.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">haley.trent@wildermanstoltenberg.biz</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(091)750-3301</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,aubree vonrueden,baby.zieme@gmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_11.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Aubree VonRueden                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Cumque odit sunt aut saepe dolorem itaque voluptatem ut culpa.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">baby.zieme@gmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">07271234621</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,prof. davonte gaylord,murphy81@shieldshowell.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head md-bg-cyan-600">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_04.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center md-color-white">
                                Prof. Davonte Gaylord                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Qui enim qui et quas est eveniet quia cupiditate voluptatum rerum iste repudiandae.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">murphy81@shieldshowell.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">436-719-8456x26839</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,letha kunde,nhuel@yahoo.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_05.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Letha Kunde                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Eum necessitatibus aut animi nihil mollitia praesentium soluta.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">nhuel@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(827)607-5753x336</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,mr. travis sauer,shawna84@hotmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_10.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Mr. Travis Sauer                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Explicabo et aut enim dolorum velit veniam reprehenderit dolor nobis vel.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">shawna84@hotmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(376)749-6922</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,mr. everardo johnson,ehansen@hotmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_02.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Mr. Everardo Johnson                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Et facilis sequi sequi minus excepturi minus omnis.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">ehansen@hotmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-948-831-7236x008</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,bertrand krajcik,hwehner@oreilly.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_09.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Bertrand Krajcik                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Et debitis cumque laboriosam iste dignissimos quasi quidem.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">hwehner@oreilly.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(671)216-8164</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,vena marks,zmarks@rath.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_03.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Vena Marks                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Aspernatur optio in quibusdam velit qui officiis voluptatem aut itaque est et sapiente illo.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">zmarks@rath.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">1-180-216-8460x8692</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,maybell swaniawski,brakus.muriel@gmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_05.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Maybell Swaniawski                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Iusto eum provident quasi qui nihil sit repellendus nulla odio aut non.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">brakus.muriel@gmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">002.900.7093</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,lon lemke,pfeffer.collin@keeblerharris.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_07.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Lon Lemke                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Earum nesciunt quia corporis qui vitae dolor autem.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">pfeffer.collin@keeblerharris.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(172)680-2557x02418</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,estell koch,yvette02@langworthstark.org">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_03.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Estell Koch                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Sint eos et reiciendis doloribus nam et eveniet eius error id sit sed facere.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">yvette02@langworthstark.org</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">+08(1)3406133567</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,miss virginia welch,cgusikowski@hotmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_10.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Miss Virginia Welch                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Dignissimos nemo molestias laborum beatae ea voluptas suscipit similique numquam veniam placeat omnis ut.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">cgusikowski@hotmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">(905)890-0995x231</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,arthur gottlieb,orobel@hotmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_09.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Arthur Gottlieb                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Quo et autem nulla modi sint saepe doloremque.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">orobel@hotmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">691.296.0092</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,vivienne erdman,rokuneva@yahoo.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_05.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Vivienne Erdman                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Ipsum sed dolorem quidem commodi ut cupiditate aliquid iure ut.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">rokuneva@yahoo.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">718.164.8941x6730</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,angelina hansen dds,alfreda12@hotmail.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_05.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Angelina Hansen DDS                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Eos ipsa est et omnis eos eligendi fuga ea natus.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">alfreda12@hotmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">+51(6)9670774779</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,rico paucek,lind.aisha@vonruedenbrown.org">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head md-bg-cyan-600">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_10.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center md-color-white">
                                Rico Paucek                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Qui similique soluta rem molestiae expedita velit est nihil dolor sed repellat maxime.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">lind.aisha@vonruedenbrown.org</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">165.896.7777x22217</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,brycen stiedemann,kamren58@schowalter.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_12.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Brycen Stiedemann                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Vitae placeat rerum beatae maxime vel ad repudiandae fugit in ut.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">kamren58@schowalter.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">978.095.5500</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="strosin groupa,ila bashirian,leonora.schaden@okuneva.org">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_03.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Ila Bashirian                                <span class="uk-text-truncate">Strosin Groupa</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">A libero amet dolor sint sit voluptas est ducimus rerum inventore laboriosam voluptatem.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">leonora.schaden@okuneva.org</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">+81(8)7667218816</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="goodwin-nienow,miss vena turcotte ii,rrobel@wunsch.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_11.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Miss Vena Turcotte II                                <span class="uk-text-truncate">Goodwin-Nienow</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Minus dolor quibusdam quisquam cum et ea eum.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">rrobel@wunsch.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">096-102-0040</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-uk-filter="schamberger plc ,ms. creola renner,donny21@reilly.com">
                    <div class="md-card md-card-hover md-card-horizontal">
                        <div class="md-card-head">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_08.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center">
                                Ms. Creola Renner                                <span class="uk-text-truncate">Schamberger PLC </span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted">Ea commodi repellat nesciunt mollitia aut id corporis.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate">donny21@reilly.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted">246.486.9374x4660</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </div>

  <?php $this->load->view('pg_admin/footerjs'); ?>
    <script src="<?php echo asset_url('pg_admin/js/pages/page_contact_list.min.js'); ?>"></script>
    <script>//
//        $(function() {
//            if(isHighDensity()) {
//                $.getScript( "<?php // echo asset_url('pg_admin/bower_components/dense/src/dense.js'); ?>", function() {
//                    // enable hires images
//                    altair_helpers.retina_images();
//                })
//            }
//            if(Modernizr.touch) {
//                // fastClick (touch devices)
//                FastClick.attach(document.body);
//            }
//        });
//        $window.load(function() {
//            // ie fixes
//            altair_helpers.ie_fix();
//        });
//    </script>
</body>
</html>
<script>
    $('#dashboard_menu').addClass('current_section'); 
</script>