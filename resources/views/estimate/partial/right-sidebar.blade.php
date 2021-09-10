<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- File Manager app overlay -->
        {{-- <div class="app-file-overlay"></div> --}}
        <div class="app-file-area">
            <!-- File App Content Area -->
            <!-- App File Header Starts -->
            <div class="app-file-header">
                <!-- Header search bar starts -->
                <div class="app-file-header-search flex-grow-1">
                    <div class="sidebar-toggle d-block toggle-sidebar">
                        {{-- <i class="bx bx-menu"></i> --}}
                        <i class="fa fa-bars" style="font-size:24px"></i>
                    </div>
                    <div class="row ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-demo" data-toggle="pill" href="#demo"
                                        aria-expanded="true">
                                        Demo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-upload" data-toggle="pill" href="#upload"
                                        aria-expanded="false">
                                        Uploads
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        href="javascript:void(0);" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" id="catalogue-tab" href="#catalogue" data-toggle="pill"
                                            aria-expanded="true">
                                            Catalogue
                                        </a>
                                        <a class="dropdown-item" id="creative-tab" href="#creative" data-toggle="pill"
                                            aria-expanded="true">Creative</a>
                                        <a class="dropdown-item" id="motion-tab" href="#motion" data-toggle="pill"
                                            aria-expanded="true">Motion</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-estimate" data-toggle="pill" href="#estimate"
                                        aria-expanded="false">
                                        Estimate
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-task" data-toggle="pill" href="#task"
                                        aria-expanded="false">
                                        Tasks
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-message" data-toggle="pill" href="#message"
                                        aria-expanded="false">
                                        Messages
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-file-content">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active p-2" id="demo" aria-labelledby="base-demo">
                        @include('estimate.partial.tab-content.demo')
                    </div>
                    <div class="tab-pane p-2" id="upload" aria-labelledby="base-upload">
                        @include('estimate.partial.tab-content.upload')
                    </div>
                    <div class="tab-pane p-2" id="catalogue" role="tabpanel" aria-labelledby="catalogue-tab"
                        aria-expanded="false">
                        @include('estimate.partial.tab-content.catalogue')
                    </div>
                    <div class="tab-pane p-2" id="creative" role="tabpanel" aria-labelledby="creative-tab"
                        aria-expanded="false">
                        @include('estimate.partial.tab-content.creative')
                    </div>
                    <div class="tab-pane p-2" id="motion" role="tabpanel" aria-labelledby="motion-tab"
                        aria-expanded="false">
                        @include('estimate.partial.tab-content.motion')
                    </div>
                    <div class="tab-pane p-2" id="estimate" aria-labelledby="base-estimate">
                        @include('estimate.partial.tab-content.estimate')
                    </div>
                    <div class="tab-pane p-2" id="task" aria-labelledby="base-task">
                        @include('estimate.partial.tab-content.tasks')
                    </div>
                    <div class="tab-pane p-2" id="message" aria-labelledby="base-message">
                        @include('estimate.partial.tab-content.messages')
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
