@extends('layouts.dashboard')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('section')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset($user->image ? 'uploads/users/'.$user->image : 'backend/assets/img/default-avatar.png') }}" alt="Profile">
                        <h2>{{ $user->name }}</h2>
                        <h3>{{ $user->job }}</h3>
                        <div class="social-links mt-2">
                            <a href="{{ $user->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="{{ $user->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $user->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="{{ $user->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Overview</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" tabindex="-1" role="tab">Edit Profile</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings" aria-selected="false" tabindex="-1" role="tab">Settings</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1" role="tab">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                                <h5 class="card-title">About</h5>
                                <p class="small fst-italic">{{ $user->about }}</p>

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Company</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->company }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Job</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->job }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Country</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->country }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->address }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                                <!-- Profile Edit Form -->
                                <form id="editProfileForm" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img id="defaultImage" src="{{ asset($user->image ? 'uploads/users/'.$user->image : 'backend/assets/img/default-avatar.png') }}" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class="btn btn-primary btn-sm"  id="uploadLink" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                <input type="file" name="image" id="profileImageUpload" style="display: none;"  onchange="previewImage();" />

                                                <a href="#"  id="removeImageLink"  class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        document.getElementById('uploadLink').addEventListener('click', function(e) {
                                            e.preventDefault(); // منع الرابط من اتباع الوجهة الافتراضية
                                            document.getElementById('profileImageUpload').click(); // تشغيل النقر على عنصر الإدخال
                                        });
                                    </script>
                                    <script>
                                        function previewImage() {
                                            var file = document.getElementById('profileImageUpload').files[0];
                                            var reader = new FileReader();

                                            reader.onloadend = function() {
                                                document.getElementById('defaultImage').src = reader.result;
                                            }

                                            if (file) {
                                                reader.readAsDataURL(file);
                                            } else {
                                                document.getElementById('defaultImage').src = "{{ asset('backend/assets/img/default-avatar.png') }}";
                                            }
                                        }
                                    </script>
                                    <script>
                                        document.getElementById('removeImageLink').addEventListener('click', function(e) {
                                            e.preventDefault(); // منع الرابط من تنفيذ الإجراء الافتراضي
                                            document.getElementById('defaultImage').src = "{{ asset('backend/assets/img/default-avatar.png') }}"; // إعادة تعيين مصدر الصورة إلى الافتراضي
                                        });
                                    </script>


                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input  name="name" type="text" class="form-control" id="fullName" value="{{ $user->name }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea  name="about" class="form-control" id="about" style="height: 100px">{{ $user->about }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input  name="company" type="text" class="form-control" id="company" value="{{ $user->company }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="job" type="text" class="form-control" id="Job" value="{{ $user->job }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="country" type="text" class="form-control" id="Country" value="{{ $user->country }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="address" type="text" class="form-control" id="Address" value="{{ $user->address }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="Phone" value="{{ $user->phone }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="Email" value="{{ $user->email }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="twitter" type="text" class="form-control" id="Twitter" value="{{ $user->twitter }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="facebook" type="text" class="form-control" id="Facebook" value="{{ $user->facebook }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="instagram" type="text" class="form-control" id="Instagram" value="{{ $user->instagram }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="linkedin" type="text" class="form-control" id="Linkedin" value="{{ $user->linkedin }}">
                                        </div>
                                    </div>


                                    <div class="text-center">
                                        <button type="button" id="saveChanges" class="btn btn-primary">Save Changes</button>
                                        <div id="loading" style="display:none;"><img src="{{ asset('') }}backend/assets/img/loading.gif" alt="Loading..."/></div>
                                        <div class="alert alert-success mt-3" role="alert"  id="updateMessage" style="display:none;">


                                        </div>

                                    </div>
                                </form>
                                <!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings" role="tabpanel">

                                <!-- Settings Form -->
                                <form  id="updateNotificationsForm" method="post" action="{{ route('profile.notifications.update') }}">
                                    @csrf


                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                        <div class="col-md-8 col-lg-9">
                                            @foreach($notificationTypes as $item)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="notification[]"
                                                       id="notification{{ $item->id }}" value="{{ $item->id }}"
                                                       @if(in_array($item->id, $user->notificationSettingss->pluck('id')->toArray())) checked @endif>
                                                <label class="form-check-label" for="gridRadios3">
                                                    {{ $item->description }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mb-3">Save Changes</button>
                                    </div>

                                    <!-- إضافة صورة التحميل -->
                                    <div id="loadingImage" class="text-center" style="display:none;">
                                        <img src="{{ asset('backend/assets/img/loading.gif') }}" alt="Loading..."/>
                                    </div>
                                    <!-- عرض الرسالة -->
                                    <div id="alertMessage" style="display:none;"></div>


                                </form>
                                <!-- End settings Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                                <!-- Change Password Form -->
                                <form id="passwordChangeForm">

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" id="changePasswordButton" class="btn btn-primary">Save Changes</button>
                                    </div>
                                    <div id="pwd_loading" class="text-center" style="display:none;">
                                        <img src="{{ asset('backend/assets/img/loading.gif') }}" alt="Loading..."/>
                                    </div>

                                    <div id="passwordChangeMessage" class="alert mt-3" style="display:none;"></div>


                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#saveChanges').click(function(e) {
                e.preventDefault();

                var formData = new FormData($('#editProfileForm')[0]);
                $('#loading').show();

                $.ajax({
                    url: "{{ route('profile.update') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#loading').hide();
                        $('#updateMessage').removeClass('alert-danger').addClass('alert-success').text(response.message || 'Profile updated successfully!').show();
                    },
                    error: function(xhr) {
                        $('#loading').hide();
                        var errorMessage = 'Error updating profile.';
                        if(xhr.responseJSON && xhr.responseJSON.errors) {
                            errorMessage = Object.values(xhr.responseJSON.errors).join(' ');
                        } else if(xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        $('#updateMessage').removeClass('alert-success').addClass('alert-danger').text(errorMessage).show();
                    }
                });
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#changePasswordButton').click(function() {
                // تجهيز بيانات النموذج للإرسال
                var formData = {
                    'current_password': $('#currentPassword').val(),
                    'new_password': $('#newPassword').val(),
                    'new_password_confirmation': $('#renewPassword').val()
                };

                // إظهار صورة التحميل
                $('#pwd_loading').show();

                $.ajax({
                    type: 'POST',
                    url: '/profile/change-password', // تأكد من تعيين ال URL الصحيح للطريقة في السيرفر
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        // إخفاء صورة التحميل
                        $('#pwd_loading').hide();

                        // إظهار رسالة نجاح التغيير
                        if(response.success) {
                            $('#passwordChangeMessage').removeClass('alert-danger').addClass('alert-success').text('Password changed successfully!').show();
                        }
                    },
                    error: function(response) {
                        // إخفاء صورة التحميل
                        $('#pwd_loading').hide();

                        // تجهيز رسالة الخطأ للعرض
                        var errors = response.responseJSON && response.responseJSON.errors;
                        var errorMessage = 'An error occurred'; // رسالة خطأ افتراضية
                        if(errors){
                            var errorMessages = [];
                            for (var key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    errorMessages.push(errors[key][0]); // افترض أن كل خطأ يحتوي على مصفوفة ونحن نأخذ العنصر الأول
                                }
                            }
                            errorMessage = errorMessages.join(' '); // لعرض رسائل الخطأ من السيرفر
                        }
                        // إظهار رسالة الخطأ
                        $('#passwordChangeMessage').removeClass('alert-success').addClass('alert-danger').text(errorMessage).show();
                    }
                });
            });
        });
    </script>
    <script>
        // file: update_notifications.js
        $(document).ready(function(){
            $('#updateNotificationsForm').on('submit', function(e){
                e.preventDefault(); // منع الإرسال الافتراضي للنموذج

                // عرض الصورة المحملة
                $('#loadingImage').show();

                // إرسال طلب الإجراء بواسطة Ajax
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(), // تسلسل البيانات المدخلة في النموذج
                    success: function(response){
                        // إخفاء الصورة المحملة
                        $('#loadingImage').hide();

                        // عرض الرسالة بنجاح
                        alertMessage('success', 'تم تعديل إعدادات الإشعارات بنجاح');
                    },
                    error: function(xhr, status, error){
                        // إخفاء الصورة المحملة
                        $('#loadingImage').hide();

                        // عرض الرسالة في حالة الخطأ
                        alertMessage('danger', 'حدث خطأ: ' + xhr.responseText);
                    }
                });
            });

            // دالة لعرض الرسائل
            function alertMessage(type, message){
                $('#alertMessage').removeClass().addClass('alert alert-' + type).text(message).show();
            }
        });

    </script>



@endsection
