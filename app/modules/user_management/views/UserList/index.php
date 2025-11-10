<div>
    <main class="grow pt-5" id="content" role="content">
        <!-- Container -->
        <div class="kt-container-fixed" id="contentContainer">
        </div>
        <!-- End of Container -->
        <!-- Container -->
        <div class="kt-container-fixed">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-medium leading-none text-mono">
                        Users list </h1>
                    <div class="flex items-center flex-wrap gap-1.5 font-medium">
                        <span class="text-base text-secondary-foreground">
                            All Users:
                        </span>
                        <span class="text-base text-foreground font-semibold me-2">
                            49,053
                        </span>
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <button class="group kt-btn kt-btn-ghost kt-btn-icon size-9 rounded-full hover:bg-primary/10 hover:[&_i]:text-primary" data-kt-modal-toggle="#add_user">
                        <a class="kt-btn kt-btn-primary" >
                            Add Member
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <!-- End of Container -->
        <!-- Container -->
        <div class="kt-container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <div class="kt-card kt-card-grid min-w-full">
                    <div class="kt-card-header flex-wrap gap-2">
                        <h3 class="kt-card-title text-sm">
                            Showing 10 of 49,053 users
                        </h3>
                        <div class="flex flex-wrap gap-2 lg:gap-5">
                            <div class="flex">
                                <label class="kt-input">
                                    <i class="ki-filled ki-magnifier">
                                    </i>
                                    <input placeholder="Search users" type="text" value="" />
                                </label>
                            </div>
                            <div class="flex flex-wrap gap-2.5">
                                <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Select a status">
                                    <option value="1">
                                        Active
                                    </option>
                                    <option value="2">
                                        Disabled
                                    </option>
                                    <option value="2">
                                        Pending
                                    </option>
                                </select>
                                <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Select a sort">
                                    <option value="1">
                                        Latest
                                    </option>
                                    <option value="2">
                                        Older
                                    </option>
                                    <option value="3">
                                        Oldest
                                    </option>
                                </select>
                                <button class="kt-btn kt-btn-outline kt-btn-primary">
                                    <i class="ki-filled ki-setting-4">
                                    </i>
                                    Filters
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-card-content">
                        <div class="grid" data-kt-datatable="true" data-kt-datatable-page-size="10">
                            <div class="kt-scrollable-x-auto">
                                <table class="kt-table table-auto kt-table-border" data-kt-datatable-table="true">
                                    <thead>
                                        <tr>
                                            <th class="w-[60px] text-center">
                                                <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-check="true" type="checkbox" />
                                            </th>
                                            <th class="min-w-[300px]">
                                                <span class="kt-table-col">
                                                    <span class="kt-table-col-label">
                                                        Subscriber
                                                    </span>
                                                    <span class="kt-table-col-sort">
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="min-w-[200px]">
                                                <span class="kt-table-col">
                                                    <span class="kt-table-col-label">
                                                        Products
                                                    </span>
                                                    <span class="kt-table-col-sort">
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="min-w-[175px]">
                                                <span class="kt-table-col">
                                                    <span class="kt-table-col-label">
                                                        License
                                                    </span>
                                                    <span class="kt-table-col-sort">
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="min-w-[175px]">
                                                <span class="kt-table-col">
                                                    <span class="kt-table-col-label">
                                                        Last Payment
                                                    </span>
                                                    <span class="kt-table-col-sort">
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="min-w-[137px]">
                                                <span class="kt-table-col">
                                                    <span class="kt-table-col-label">
                                                        Enforce 2FA
                                                    </span>
                                                    <span class="kt-table-col-sort">
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="w-28 text-center">
                                                <span class="kt-table-col">
                                                    <span class="kt-table-col-label">
                                                        Invoices
                                                    </span>
                                                    <span class="kt-table-col-sort">
                                                    </span>
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="2">
                                                </input>
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2.5">
                                                    <img alt="" class="rounded-full size-7 shrink-0" src="assets/media/avatars/300-1.png">
                                                    <div class="flex flex-col">
                                                        <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                                                            Esther Howard
                                                        </a>
                                                        <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                                                            esther.howard@gmail.com
                                                        </a>
                                                    </div>
                                                    </img>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-wrap gap-1.5">
                                                    <span class="kt-badge kt-badge-outline">
                                                        Design
                                                    </span>
                                                    <span class="kt-badge kt-badge-outline">
                                                        Template
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-col">
                                                    <span class="text-sm text-foreground font-medium">
                                                        Trial
                                                    </span>
                                                    <span class="text-xs text-secondary-foreground">
                                                        16 days left
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-foreground font-medium">
                                                21 Apr, 2024
                                            </td>
                                            <td>
                                                <input class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1" />
                                            </td>
                                            <td>
                                                <div class="flex justify-center">
                                                    <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                        Download
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="3">
                                                </input>
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2.5">
                                                    <img alt="" class="rounded-full size-7 shrink-0" src="assets/media/avatars/300-11.png">
                                                    <div class="flex flex-col">
                                                        <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                                                            Jacob Jones
                                                        </a>
                                                        <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                                                            jacob.jones@gmail.com
                                                        </a>
                                                    </div>
                                                    </img>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-wrap gap-1.5">
                                                    <span class="kt-badge kt-badge-outline">
                                                        App
                                                    </span>
                                                    <span class="kt-badge kt-badge-outline">
                                                        Plugin
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-col">
                                                    <span class="text-sm text-foreground font-medium">
                                                        Premium
                                                    </span>
                                                    <span class="text-xs text-secondary-foreground">
                                                        2 months left
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-foreground font-medium">
                                                14 Mar, 2024
                                            </td>
                                            <td>
                                                <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1" />
                                            </td>
                                            <td>
                                                <div class="flex justify-center">
                                                    <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                        Download
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="4">
                                                </input>
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2.5">
                                                    <img alt="" class="rounded-full size-7 shrink-0" src="assets/media/avatars/300-2.png">
                                                    <div class="flex flex-col">
                                                        <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                                                            Cody Fisher
                                                        </a>
                                                        <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                                                            cody.fisher@gmail.com
                                                        </a>
                                                    </div>
                                                    </img>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-wrap gap-1.5">
                                                    <span class="kt-badge kt-badge-outline">
                                                        Template
                                                    </span>
                                                    <span class="kt-badge kt-badge-outline">
                                                        NFT
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-col">
                                                    <span class="text-sm text-foreground font-medium">
                                                        Standard
                                                    </span>
                                                    <span class="text-xs text-secondary-foreground">
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-foreground font-medium">
                                                20 Apr, 2024
                                            </td>
                                            <td>
                                                <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1" />
                                            </td>
                                            <td>
                                                <div class="flex justify-center">
                                                    <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                        Download
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="kt-card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-secondary-foreground text-sm font-medium">
                                <div class="flex items-center gap-2 order-2 md:order-1">
                                    Show
                                    <select class="kt-select w-16" data-kt-datatable-size="true" data-kt-select="" name="perpage">
                                    </select>
                                    per page
                                </div>
                                <div class="flex items-center gap-4 order-1 md:order-2">
                                    <span data-kt-datatable-info="true">
                                    </span>
                                    <div class="kt-datatable-pagination" data-kt-datatable-pagination="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Container -->
    </main>    
    <?php $this->load->view('user_management/UserList/modals/add_user'); ?>
    <?php $this->load->view('user_management/UserList/js/add_user_js'); ?>

</div>