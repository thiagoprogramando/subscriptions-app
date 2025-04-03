@extends('app.layout')
@section('content')

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-6">
                        <div class="user-profile-header-banner">
                            <img src="{{ asset('template/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top" style="width: 100%; height: auto;" />
                        </div>
                        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-5">

                            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto position-relative">
                                <img id="profile-img"
                                    src="{{ asset(Auth::user()->profile_image ? 'storage/' . Auth::user()->profile_image : 'template/img/avatars/1.png') }}"
                                    alt="user image"
                                    class="d-block h-auto ms-0 ms-sm-5 rounded-4 user-profile-img"
                                    style="width: 200px; height: 200px; object-fit: cover;"
                                    onerror="this.onerror=null; this.src='{{ asset('template/img/avatars/1.png') }}'" ; />

                                <button type="button" class="btn btn-secondary btn-sm rounded-circle position-absolute"
                                    id="change-photo-btn"
                                    style="bottom: 5px; right: 5px; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                    <i class="ri-camera-line"></i>
                                </button>

                                <input type="file" id="profile-image-input" name="profile_image" style="display: none;" accept="image/*">
                            </div>

                            <div id="preview-modal" class="modal"
                                style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
                                background: rgba(0, 0, 0, 0.5); display: flex; align-items: center; justify-content: center;">
                                <div class="modal-content"
                                    style="background: white; padding: 20px; border-radius: 10px; text-align: center; width: 360px;">
                                    <h5>Pré-visualização</h5>
                                    <div style="display: flex; justify-content: center; align-items: center; padding: 10px;">

                                        <img id="preview-img" src="" alt="Preview da nova imagem" class="rounded-4" style="width: 220px; height: 220px; object-fit: cover; border: 2px solid #ddd;">
                                    </div>

                                    <div>
                                        <button id="save-photo-btn" class="btn btn-success">Salvar</button>
                                        <button id="cancel-photo-btn" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-grow-1 mt-4 mt-sm-12">
                                <div
                                    class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-6">
                                    <div class="user-profile-info">
                                        <h4 class="mb-2">{{ Auth::user()->name }}</h4>
                                        <ul
                                            class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                                            <li class="list-inline-item">
                                                <i class="ri-calendar-line me-2 ri-24px"></i>
                                                <span class="fw-medium">Joined {{ Auth::user()->created_at->format('d/m/Y') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-primary">
                                        <i class="ri-user-follow-line ri-16px me-2"></i>Connected
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Coluna para informações do usuário -->
                <div class="col-xl-4 col-lg-5 col-md-5">

                    <div class="card mb-6">
                        <div class="card-body">
                            <small class="card-text text-uppercase text-muted small">Sobre o Usuário:</small>
                            <ul class="list-unstyled my-3 py-1">
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Nome Completo:</span>
                                    <span>{{ auth()->user()->name }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-mail-open-line ri-24px"></i><span class="fw-medium mx-2">Email:</span>
                                    <span>{{ auth()->user()->email }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-id-card-line ri-24px"></i><span class="fw-medium mx-2">CPF/CNPJ:</span>
                                    <span>{{ auth()->user()->cpfcnpj }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-shield-user-line ri-24px"></i><span class="fw-medium mx-2">Tipo:</span>
                                    <span>{{ auth()->user()->type }}</span>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                Editar Perfil
                            </button>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editUserModalLabel">Editar Perfil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editUserForm">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="cpfcnpj" name="cpfcnpj" value="{{ auth()->user()->cpfcnpj }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Tipo</label>
                                        <input type="text" class="form-control" id="type" name="type" value="{{ auth()->user()->type == 'admin' ? 'Admin' : 'Usuário' }}" readonly>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coluna para Connections -->
                <div class="col-xl-8 col-lg-7 col-md-7">
                    <div class="card card-action mb-6">
                        <div class="card-header align-items-center">
                            <h5 class="card-action-title mb-0">Connections</h5>
                            <div class="card-action-element">
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-line ri-22px text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar me-2">
                                                <img src="{{ asset('template/img/avatars/12.png') }}" alt="Avatar" class="rounded-circle" />
                                            </div>
                                            <div class="me-2">
                                                <h6 class="mb-1">Eugenia Moore</h6>
                                                <small>1.2k Connections</small>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <button class="btn btn-outline-primary btn-icon">
                                                <i class="ri-user-add-line ri-22px"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-center">
                                    <a href="javascript:;">View all connections</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>





            <script src="{{ asset('template/vendor/libs/jquery/jquery.js') }}"></script>
            <script src="{{ asset('template/vendor/libs/popper/popper.js') }}"></script>
            <script src="{{ asset('template/vendor/js/bootstrap.js') }}"></script>
            <script src="{{ asset('template/vendor/libs/node-waves/node-waves.js') }}"></script>
            <script src="template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="template/assets/vendor/libs/hammer/hammer.js"></script>
            <script src="template/assets/vendor/libs/i18n/i18n.js"></script>
            <script src="template/assets/vendor/libs/typeahead-js/typeahead.js"></script>
            <script src="template/assets/vendor/js/menu.js"></script>

            <script src="{{ asset('template/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">


            <script src="{{ asset('template/js/pages-profile-user.js') }}"></script>
            <script>
                let originalImage = document.getElementById('profile-img').src;
                let selectedFile = null;
                let cropper;
                const previewModal = document.getElementById('preview-modal');
                const previewImg = document.getElementById('preview-img');

                document.getElementById('change-photo-btn').addEventListener('click', function() {
                    document.getElementById('profile-image-input').click();
                });

                document.getElementById('profile-image-input').addEventListener('change', function(event) {
                    selectedFile = event.target.files[0];

                    if (selectedFile) {
                        const reader = new FileReader();
                        reader.onload = function(e) {

                            previewModal.style.display = 'flex';
                            previewImg.src = e.target.result;

                            if (cropper) {
                                cropper.destroy();
                            }

                            cropper = new Cropper(previewImg, {
                                aspectRatio: 1,
                                viewMode: 1,
                                preview: '.preview',
                                zoomable: true,
                                crop: function(event) {
                                    previewImg.src = cropper.getCroppedCanvas().toDataURL();
                                }
                            });
                        };
                        reader.readAsDataURL(selectedFile);
                    }
                });

                document.getElementById('save-photo-btn').addEventListener('click', function() {
                    if (!selectedFile) return;

                    const croppedCanvas = cropper.getCroppedCanvas();
                    const croppedImage = croppedCanvas.toBlob(function(blob) {
                        let formData = new FormData();
                        formData.append('profile_image', blob);
                        formData.append('_token', '{{ csrf_token() }}');

                        fetch('{{ route("profile.update-photo") }}', {
                                method: 'POST',
                                body: formData,
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    document.getElementById('profile-img').src = data.image_url;
                                    originalImage = data.image_url;
                                    previewModal.style.display = 'none';
                                } else {
                                    alert('Erro ao salvar a imagem!');
                                }
                            })
                            .catch(error => {
                                console.error('Erro:', error);
                                alert('Erro ao salvar a imagem!');
                            });
                    }, 'image/jpeg');
                });

                document.getElementById('cancel-photo-btn').addEventListener('click', function() {
                    document.getElementById('profile-img').src = originalImage;
                    previewModal.style.display = 'none';
                });

                window.onclick = function(event) {
                    if (event.target === previewModal) {
                        previewModal.style.display = 'none';
                    }
                };
            </script>

            <script>
                document.getElementById('editUserForm').addEventListener('submit', function(event) {
                    event.preventDefault();

                    let formData = new FormData(this);

                    fetch('{{ route("user.update") }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert(data.message);

                                // Atualizar os dados na seção "Sobre o Usuário"
                                document.querySelector('.user-profile-info h4').textContent = data.user.name;
                                document.querySelector('.list-unstyled li:nth-child(1) span:last-child').textContent = data.user.name;
                                document.querySelector('.list-unstyled li:nth-child(2) span:last-child').textContent = data.user.email;
                                document.querySelector('.list-unstyled li:nth-child(3) span:last-child').textContent = data.user.cpfcnpj;

                                // Fechar o modal
                                let modal = bootstrap.Modal.getInstance(document.getElementById('editUserModal'));
                                modal.hide();
                            } else {
                                alert('Erro ao atualizar perfil.');
                            }
                        })
                        .catch(error => {
                            console.error('Erro:', error);
                            alert('Erro ao atualizar perfil.');
                        });
                });
            </script>

            @endsection
