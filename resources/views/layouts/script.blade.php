<script type="text/javascript" src="{{ asset('admin-assets/js/mdb.min.js') }}"></script>
<script src="{{ asset('admin-assets/sweetalert/sweetalert2.min.js') }}"></script>
<script defer src="https://unpkg.com/alpinejs@3.3.4/dist/cdn.min.js"></script>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('toggleSidebar', () => ({
            open: window.innerWidth <= 992 ? false : true,

            toggle() {
                this.open = !this.open
            }
        })),
            Alpine.data('dropdown', () => ({
                open: false,

                toggle() {
                    this.open = !this.open
                }
            }))
    })
</script>
