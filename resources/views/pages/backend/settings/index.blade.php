@extends('layouts.backend.master')
@section('breadcrumb')
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
        <!--begin::Item-->
        <li class="breadcrumb-item text-white fw-bold lh-1">
            <a href="{{ route('backend.dashboard') }}" class="text-white">
                <i class="ki-outline ki-home text-white fs-3"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-white fw-bold lh-1">
            <a href="{{ route('backend.settings.index') }}" class="text-white">Settings</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-white fw-bold lh-1">Edit Settings</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div id="content_list">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_tab_pane_1">Site</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_pane_2">User</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                    <!--begin::Form-->
                    <form id="edit_site_form" action="{{ route('backend.settings.update_site') }}" method="PUT" enctype="multipart/form-data">

                        {{-- GENERAL --}}
                        <div class="d-flex flex-column gap-7 gap-lg-10 py-5">

                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h1>General</h1>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <div class="card-body">
                                    <!--begin::Aside column-->
                                    <div class="d-flex flex-column flex-lg-row">
                                    
                                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                            <!--begin::Logo settings-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">
                                                        <h2>Logo</h2>
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body text-center pt-0">
                                                    <!--begin::Image input placeholder-->
                                                    <style>
                                                        .image-input-placeholder {
                                                            background-image: url({{ asset('backend/media/svg/files/blank-image.svg') }})
                                                        }

                                                        [data-theme="dark"] .image-input-placeholder {
                                                            background-image: url({{ asset('backend/media/svg/files/blank-image-dark.svg') }})
                                                        }
                                                    </style>
                                                    <!--end::Image input placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder mb-3"
                                                        data-kt-image-input="true">
                                                        <!--begin::Preview existing logo-->
                                                        <div class="image-input-wrapper w-150px h-150px"
                                                            style="background-image: url({{ asset('images/' . $setting->site_logo) }})">
                                                        </div>
                                                        <!--end::Preview existing logo-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="Change Logo">
                                                            <!--begin::Icon-->
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--end::Icon-->
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="site_logo" accept=".png, .jpg, .jpeg, .svg" />
                                                            <input type="hidden" name="logo_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                            title="Cancel Logo">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                            title="Remove Logo">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the logo image. Only *.png, *.jpg and
                                                        *.jpeg *.svg
                                                        image files are accepted</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Logo settings-->
                                            <!--begin::Favicon settings-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">
                                                        <h2>Favicon</h2>
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body text-center pt-0">
                                                    <!--begin::Image input placeholder-->
                                                    <style>
                                                        .image-input-placeholder {
                                                            background-image: url({{ asset('backend/media/svg/files/blank-image.svg') }})
                                                        }

                                                        [data-theme="dark"] .image-input-placeholder {
                                                            background-image: url({{ asset('backend/media/svg/files/blank-image-dark.svg') }})
                                                        }
                                                    </style>
                                                    <!--end::Image input placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder mb-3"
                                                        data-kt-image-input="true">
                                                        <!--begin::Preview existing favicon-->
                                                        <div class="image-input-wrapper w-150px h-150px"
                                                            style="background-image: url({{ asset('images/' . $setting->site_favicon) }})">
                                                        </div>
                                                        <!--end::Preview existing favicon-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="Change Favicon">
                                                            <!--begin::Icon-->
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--end::Icon-->
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="site_favicon"
                                                                accept=".png, .jpg, .jpeg, .svg, .ico" />
                                                            <input type="hidden" name="favicon_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                            title="Cancel Favicon">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                            title="Remove Favicon">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the favicon image. Only *.png, *.jpg and
                                                        *.jpeg *.svg
                                                        *.ico
                                                        image files are accepted</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Favicon settings-->
                                        </div>
                                        <!--end::Aside column-->
                                        <!--begin::Main column-->
                                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                            <!--begin::General options-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                              
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <br>
                                                        <!--begin::Label-->
                                                        <label class="required form-label">Site Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="site_name" class="form-control mb-2"
                                                            placeholder="Site Name" value="{{ $setting->site_name }}" />
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">A site name is required and recommended to
                                                            be unique.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="required form-label">Site Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="site_email" class="form-control mb-2"
                                                            placeholder="Site Email" value="{{ $setting->site_email }}" />
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">A site email is required and recommended to
                                                            be unique.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <button type="submit" class="btn btn-primary" data-kt-element="submit">
                                                    <span class="indicator-label">Save Changes</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::General options-->
                                        </div>
                                        
                                        <!--end::Main column-->
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        {{-- /GENERAL --}}

                        {{-- ABOUT VISI MISI --}}
                        <div class="d-flex flex-column gap-7 gap-lg-10 py-5">  

                            <!-- Services Section Start -->

                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h1>About DRC</h1>
                                    </div>
                                    <!--end::Card title-->
                                </div>

                                <div class="card-body">
                                    <!--begin::Aside column-->
                                    <!--begin::Aside column-->

                                    {{-- VISION --}}
                                    <div class="d-flex flex-column flex-lg-row">

                                   
                                            <div class="col-4">
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    <div class="card-header">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Vision Logo</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input placeholder-->
                                                        <style>
                                                            .image-input-placeholder {
                                                                background-image: url({{ asset('backend/media/svg/files/blank-image.svg') }})
                                                            }
    
                                                            [data-theme="dark"] .image-input-placeholder {
                                                                background-image: url({{ asset('backend/media/svg/files/blank-image-dark.svg') }})
                                                            }
                                                        </style>
                                                        <!--end::Image input placeholder-->
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-outline image-input-placeholder mb-3"
                                                            data-kt-image-input="true">
                                                            <!--begin::Preview existing logo-->
                                                            <div class="image-input-wrapper w-150px h-150px"
                                                                style="background-image: url({{ asset('images/' . $setting->visi_logo) }})">
                                                            </div>
                                                            <!--end::Preview existing logo-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Change Vission Logo">
                                                                <!--begin::Icon-->
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--end::Icon-->
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="visi_logo" accept=".png, .jpg, .jpeg, .svg" />
                                                                <input type="hidden" name="visi_logo_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                                title="Cancel Logo">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                                title="Remove Vission Logo">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the logo image. Only *.png, *.jpg and
                                                            *.jpeg *.svg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                            </div>

                                            <div class="col-8">
                                                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                                    <!--begin::General options-->
                                                    <div class="card card-flush py-4">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>Vission</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <!--begin::Input group-->
                                                      
                                                                <div class="fv-row">
                                                                    <!--begin::Label-->
                                                                    <label class="required form-label">Describe the Vission</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <textarea name="visi" rows="6" class="form-control mb-2"
                                                                        placeholder="Vission..." value="">{{ $setting->visi }}</textarea>
                                                                    <!--end::Input-->
                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">A vission is required, please describe the vission
                                                                    </div>
                                                                    <!--end::Description-->
                                                                </div>
                                                                
                                                        
                                                        </div>
                                                        
                                                    </div>
                                                    <!--end::General options-->
                                                </div>
                                            </div>

                                    </div>
                                    {{-- /VISION --}}

                                    <br>
                                    {{-- MISSION --}}
                                    <div class="d-flex flex-column flex-lg-row">

                                        <div class="col-4">
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">
                                                        <h2>Mission Logo</h2>
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body text-center pt-0">
                                                    <!--begin::Image input placeholder-->
                                                    <style>
                                                        .image-input-placeholder {
                                                            background-image: url({{ asset('backend/media/svg/files/blank-image.svg') }})
                                                        }

                                                        [data-theme="dark"] .image-input-placeholder {
                                                            background-image: url({{ asset('backend/media/svg/files/blank-image-dark.svg') }})
                                                        }
                                                    </style>
                                                    <!--end::Image input placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder mb-3"
                                                        data-kt-image-input="true">
                                                        <!--begin::Preview existing favicon-->
                                                        <div class="image-input-wrapper w-150px h-150px"
                                                            style="background-image: url({{ asset('images/' . $setting->misi_logo) }})">
                                                        </div>
                                                        <!--end::Preview existing favicon-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="Change Mission Logo">
                                                            <!--begin::Icon-->
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--end::Icon-->
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="misi_logo"
                                                                accept=".png, .jpg, .jpeg, .svg, .ico" />
                                                            <input type="hidden" name="misi_logo_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                            title="Cancel Mission Logo">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                            title="Remove Mission Logo">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the logo image. Only *.png, *.jpg and
                                                        *.jpeg *.svg
                                                        *.ico
                                                        image files are accepted</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                        </div>

                                        <div class="col-8">
                                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                                <!--begin::General options-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h2>Mission</h2>
                                                        </div>
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0">
                                                        <!--begin::Input group-->
                                                        <div class=" fv-row">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Describe the mission</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <textarea name="misi" rows="6" class="form-control mb-2"
                                                                placeholder="Mission..." value="">{{ $setting->misi }}</textarea>
                                                            <!--end::Input-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fs-7">A mission is required, please describe the mission
                                                            </div>
                                                            <!--end::Description-->
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <!--end::General options-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="submit" class="btn btn-primary" data-kt-element="submit">
                                                        <span class="indicator-label">Save Changes</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- /MISSION --}}
                        
                                
                                </div>
                            </div>

                        </div>
                        {{-- /ABOUT VISI MISI --}}

                    </form>
                </div>
                <!--end::Tab pane-->
            

                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                    <div class="d-flex flex-column gap-7 gap-lg-10 py-5">
                        <!--begin::Form-->
                        <form id="edit_user_form" class="form d-flex flex-column flex-lg-row"
                            action="{{ route('backend.settings.update_user') }}" method="PUT">
                            <!--begin::Main column-->
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name" class="form-control mb-2"
                                                placeholder="Name" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A name is required and recommended to be
                                                unique.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="password" name="password" class="form-control mb-2"
                                                placeholder="Password" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A password is required and recommended to be
                                                unique.
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Password Confirmation</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="password" name="password_confirmation" class="form-control mb-2"
                                                placeholder="Password Confirmation" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A password confirmation is required and
                                                recommended to be unique.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::General options-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary" data-kt-element="submit">
                                        <span class="indicator-label">Save Changes</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </div>
                            <!--end::Main column-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
        </div>
    </div>
@endsection
@push('custom-scripts')
    <script src="{{ asset('js/FormControls.js') }}"></script>
    <script>
        "use strict";
        // Class definition
        const KTSiteSetting = function() {
            // Base elements
            const formSiteEl = $('#edit_site_form');
            const formUserEl = $('#edit_user_form');
            const formSeoEl = $('#edit_seo_form');

            const _onSubmitForm = function() {
                // on submit form
                formSiteEl.on('submit', function(e) {
                    console.log('submit');
                    e.preventDefault();
                    KTFormControls.onSubmitForm(formSiteEl);
                });
                formUserEl.on('submit', function(e) {
                    e.preventDefault();
                    KTFormControls.onSubmitForm(formUserEl);
                });
                formSeoEl.on('submit', function(e) {
                    e.preventDefault();
                    KTFormControls.onSubmitForm(formSeoEl);
                });
            }

            return {
                // public functions
                _init: function() {
                    _onSubmitForm();
                },

            };
        }();
        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTSiteSetting._init();
        });
    </script>
@endpush
