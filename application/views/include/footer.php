<footer class="footer">
    © 2024 Developed by Imam Dienul.
</footer>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->

<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url();?>assets/js/popper.min.js"></script>
        <script src="<?=base_url();?>assets/js/bootstrap-material-design.js"></script>
        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?=base_url();?>assets/js/detect.js"></script>
        <script src="<?=base_url();?>assets/js/fastclick.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?=base_url();?>assets/js/waves.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
        <!-- Datatable init js -->
        <script src="<?=base_url();?>assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?=base_url();?>assets/js/app.js"></script>
        <script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('nav-search');
    const searchResults = document.getElementById('search-results');
    
    const menuItems = [
        { name: 'Menu Dashboard', url: '<?= base_url(); ?>dashboard' },
        { name: 'Menu Kelas', url: '<?= base_url(); ?>kelas' },
        { name: 'Menu Wali Kelas', url: '<?= base_url(); ?>walikelas/list_walikelas' },
        { name: 'Menu Data Siswa', url: '<?= base_url(); ?>siswa' },
        { name: 'Menu RFID', url: '<?= base_url(); ?>siswa/siswanew' },
        { name: 'Menu Riwayat Kehadiran', url: '<?= base_url(); ?>absensi' },
        { name: 'Menu Alpa', url: '<?= base_url(); ?>alfa' },
        { name: 'Menu Perizinan', url: '<?= base_url(); ?>izin' },
        { name: 'Menu Admin', url: '<?= base_url(); ?>users' },
        { name: 'Menu Device', url: '<?= base_url(); ?>devices' },
        { name: 'Menu Waktu Operasional', url: '<?= base_url(); ?>setting' },
        { name: 'Menu SQL Command', url: '<?= base_url(); ?>sql' }
    ];

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const filteredItems = menuItems.filter(item => 
            item.name.toLowerCase().includes(searchTerm)
        );

        displayResults(filteredItems);
    });

    function displayResults(items) {
        searchResults.innerHTML = '';
        
        if (items.length === 0 || searchInput.value.trim() === '') {
            searchResults.style.display = 'none';
            return;
        }

        items.forEach(item => {
            const div = document.createElement('div');
            div.className = 'search-result-item';
            div.textContent = item.name;
            div.addEventListener('click', () => {
                window.location.href = item.url;
            });
            searchResults.appendChild(div);
        });

        searchResults.style.display = 'block';
    }

    // Close search results when clicking outside
    document.addEventListener('click', function(event) {
        if (!searchResults.contains(event.target) && event.target !== searchInput) {
            searchResults.style.display = 'none';
        }
    });
});
</script>

</body>
</html>
