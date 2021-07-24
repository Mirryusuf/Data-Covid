$('.btn').on('click', function() {
	$('#tombol').html('<button type="button" class="btn btn-outline-light"><a  href="" class="text-light font-weight-bold">Mode Terang</a></button>');
	$('.warna').removeClass('bg-light');
	$('.judul').removeClass('text-dark');
	$('.judulnya').removeClass('text-dark');
	$('.card-header').removeClass('text-dark');
	$('.card-title').removeClass('text-dark');
	$('.navbar').removeClass('bg-light');
	$('.navbar-brand').removeClass('text-dark');
	$('.nav-item').removeClass('text-dark');
	$('.warna').addClass('bg-secondary');
	$('.judul').addClass('text-light');
	$('.judulnya').addClass('text-light');
	$('.card-header').addClass('text-light');
	$('.card-title').addClass('text-light');
	$('.card').addClass('bg-dark');
	$('.table').addClass('table-dark');
	$('.navbar').addClass('bg-secondary');
	$('.navbar-brand').addClass('text-light');
	$('.nav-item').addClass('text-light');
	$('.footer-copyright').addClass('text-light');
});

// $('.putih').on('click', function() {
// 	$('#tombol').html('<button type="button" class="btn btn-outline-dark">Mode Dark</button>');
// 	$('.warna').removeClass('bg-dark');
// 	$('.judul').removeClass('text-light');
// 	$('.judulnya').removeClass('text-light');
// 	$('.card-header').removeClass('text-light');
// 	$('.card-title').removeClass('text-light');
// 	$('.navbar').removeClass('bg-dark');
// 	$('.navbar-brand').removeClass('text-light');
// 	$('.nav-item').removeClass('text-light');
// 	$('.warna').addClass('bg-light');
// 	$('.judul').addClass('text-dark');
// 	$('.judulnya').addClass('text-dark');
// 	$('.card-header').addClass('text-dark');
// 	$('.card-title').addClass('text-dark');
// 	$('.card').addClass('bg-light');
// 	$('.table').addClass('table-light');
// 	$('.navbar').addClass('bg-light');
// 	$('.navbar-brand').addClass('text-dark');
// 	$('.nav-item').addClass('text-dark');
// });

