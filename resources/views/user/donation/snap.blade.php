<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-xxxxx"></script>
<script>
    window.snap.pay("{{ $snapToken }}", {
        onSuccess: function(result) {
            window.location.href = '/donasi/berhasil';
        },
        onPending: function(result) {
            alert('Menunggu pembayaran...');
        },
        onError: function(result) {
            alert('Terjadi kesalahan.');
        },
        onClose: function() {
            alert('Anda menutup tanpa menyelesaikan pembayaran.');
        }
    });
</script>
