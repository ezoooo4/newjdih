@push('script')
            @once
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                const deleteData = (id, path) => {
                    const base_url = '{{ url('/') }}';
                    const current_url = '{{ url()->current() }}';
                    const url = path ? `${base_url}/${path}/${id}` : `${current_url}/delete/${id}`;
        
                    Swal.fire({
                        title: 'Anda Yakin akan Menghapus Data Ini?',
                        text: "Data yang dihapus tidak bisa dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, Hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const csrf_token = `{{ csrf_token() }}`;
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = url;
        
                            const tokenInput = document.createElement('input');
                            tokenInput.type = 'hidden';
                            tokenInput.name = '_token';
                            tokenInput.value = csrf_token;
        
                            const methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';
        
                            form.appendChild(tokenInput);
                            form.appendChild(methodInput);
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                }
            </script>
            @endonce
        @endpush