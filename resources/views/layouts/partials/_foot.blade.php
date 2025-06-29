<script>
    $('.team-tab').on('click', function() {
            const target = $(this).data('target');

            $('.team-tab').removeClass('active');
            $(this).addClass('active');

            $('.team-content').hide();
            $(target).fadeIn(300);
        });
</script>

<script>
    function createLine() {
  const randomLeft = Math.random() * window.innerWidth;
  const randomHeight = 80 + Math.random() * 120; // tinggi antara 80 - 200px
  const randomWidth = 1 + Math.random() * 2;     // lebar antara 1 - 3px

  const $line = $('<div class="line"></div>').css({
    left: randomLeft + 'px',
    width: randomWidth + 'px',
    height: randomHeight + 'px'
  });

  $('#line-container').append($line);

  setTimeout(() => {
    $line.remove();
  }, 2000); // sesuai durasi animasi
}

// Buat garis baru setiap 100ms
setInterval(createLine, 500);


</script>