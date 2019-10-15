

<script>
    msg = {nim: "<?= $nim ?>", registrasi: "<?= $registrasi ?>", webhook: "<?= $webhook ?>"};
    msg = JSON.stringify(msg); 

    conn.onopen = () => conn.send(msg);
</script>