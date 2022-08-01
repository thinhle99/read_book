@extends('../layout')
@section('content')
<!-- <link rel="stylesheet" href="../public/css/details.css" />
<link rel="stylesheet" href="public/css/details.css" /> -->

<style type="text/css">
	.content-details-1 {
		width: 80%;
		margin-top: 50px;
		margin-left: auto;
		margin-right: auto;
		padding: 15px;
	}

	.content-details-2 {
		width: 80%;
		margin-top: 50px;
		margin-left: auto;
		margin-right: auto;
		padding: 15px;
	}

	.lienquan {
		text-align: center;
		font-size: 30px;
		font-weight: 750;
		padding-top: 10px;
		padding-bottom: 70px;
	}

	.card {
		display: flex;
		flex-direction: column;
		/* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
		/* https://www.cssmatic.com/box-shadow */
		/* box-shadow: 4px 4px 5px 0px rgba(217,213,217,0.65); */
		box-shadow: 7px 8px 7px 0px rgba(224, 224, 224, 1);
		height: 275px;
		width: 100%;
		/* width: 235px; */
		margin: 0;
		border-radius: 15px;
		box-shadow: none;
		background-color: white;
		overflow: hidden;
	}

	.card-image {
		/* height: 280px;
		width: 100%;
		justify-items: center;
		object-fit: cover; */

		width: 100%;
		height: 200px;
		object-fit: scale-down;
	}

	.card-image:hover {
		opacity: 0.75;
	}

	.card-top {
		padding: 10px;
	}

	.card-content {
		/* height: calc(100%-200px); */
		border-top: 1px solid #222;
		display: flex;
		flex-direction: column;
	}

	.card-title {
		font-size: 16px;
		font-weight: 550;
		color: black;
		margin-bottom: 20px;
		word-break: break-all;
		/* text-truncate */
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
		word-break: break-word;
		margin-bottom: 5px;
	}

	.card-title:hover {
		font-size: 16px;
		font-weight: 600;
		color: #005550;
	}

	.card a:hover {
		/* text-decoration: none; */
		text-decoration-color: #005550;

	}

	/* Modal */
	.modal {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: rgba(0, 0, 0, 0.4);
		/* display: flex; */
		align-items: center;
		justify-content: center;
		display: none;
	}

	.modal.open {
		display: flex;
	}

	.modal-container {
		background-color: #005550;
		/* background-image: url("../public/image/loader.gif"); */
		/* background-color: white; */
		width: 1000px;
		min-width: 80%;
		/* max-width: calc(100% - 32px); */
		height: 100%;
		animation: btnshowBooks ease 2.5s;
	}

	.modal-close {
		color: white;
		font-size: 20px;
		font-weight: 500;
		float: right;
		padding: 5px 10px 5px 10px;
		margin: 0;
		cursor: pointer;
		/* opacity: 0.5; */
	}

	.modal-close:hover {
		background-color: red;
		opacity: 1;
	}

	#embeddedView {
		display: none;
		height: 100%;
		width: 100%;
	}

	#loader {
		/* background-image: url("https://assets.codepen.io/4479906/loader.gif"); */
		/* background-image: url("../public/image/loader.gif"); */
		background-repeat: no-repeat;
		background-position: center;
		width: 100%;
		height: 100%;
		max-width: 200px;
		display: none;
	}

	@keyframes btnshowBooks {
		from {
			transform: translateY(-100vh);
		}

		to {
			transform: translateY(0);
		}
	}

	/* Category */
	#title {
		font-size: 30px;
		font-weight: 750;
	}

	#author {
		font-size: 15px;
		font-weight: bold;
		color: #0186c9;
	}

	#date {
		margin-left: 10px;
		font-size: 15px;
		color: #819196;
	}

	#size {
		font-size: 15px;
		color: #819196;
	}

	#description {
		margin-top: 20px;
		font-weight: lighter;
	}

	.category-box {
		display: flex;
		overflow: hidden;
		/* flex-direction: column; */
	}

	.category-box-img {
		width: 40%;
		/* display: flex; */
		padding-top: 20px;
	}

	.category-img {
		/* display: block; margin-left: auto; margin-right: auto; */
		width: 100%;
		/* max-width: 100%; */
		max-height: 850px;
		object-fit: cover;
	}

	.category-content {
		flex: 1;
		padding: 20px 10px 0 20px;
	}

	/* Responsive */
	.list-card-grid {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		grid-gap: 16px;
		/* grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); */
		/* grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); */
	}

	@media screen and (min-width: 1200px) {

		.content-details-1 {
			width: 85%;
		}

		.btn-mobile {
			font-size: 14px;
		}



		.content-details-2 {
			width: 85%;
		}

		.card {
			height: 275px;

		}

		.card-image {
			height: 200px;
			object-fit: cover;
			/* object-fit: scale-down; */
		}

		.list-card-grid {
			grid-template-columns: repeat(4, 1fr);
		}
	}

	@media screen and (max-width: 1200px) {

		.content-details-1 {
			width: 95%;
		}

		.btn-mobile {
			font-size: 14px;
		}



		.content-details-2 {
			width: 92%;
		}

		.card {
			height: 275px;

		}

		.card-image {
			height: 200px;
			object-fit: cover;
			/* object-fit: scale-down; */
		}

		.list-card-grid {
			grid-template-columns: repeat(4, 1fr);
		}
	}

	@media screen and (max-width: 960px) {

		.content-details-1 {
			width: 95%;
		}

		.btn-mobile {
			font-size: 14px;
		}



		.content-details-2 {
			width: 95%;
		}

		.card {
			height: 260px;
		}

		.card-image {
			height: 190px;
			object-fit: cover;
			/* object-fit: scale-down; */
		}

		.list-card-grid {
			grid-template-columns: repeat(3, 1fr);
		}
	}

	@media screen and (max-width: 780px) {

		.content-details-1 {
			width: 97%;
		}

		.category-box {
			display: flex;
			/* overflow: hidden; */
			flex-direction: column;
		}

		.category-box-img {
			padding-top: 20px;
			/* width: 40%; */
			width: 100%;
			object-fit: cover;
			display: block;
			margin-left: auto;
			margin-right: auto;
			/* min-width:80%; */

		}

		.category-content {
			flex: 1;
			padding: 20px 5px 0 5px;
		}

		.btn-mobile {
			font-size: 14px;
		}

		.category-img {
			border: 1px solid #e4e4e4;
			display: block;
			margin-left: auto;
			margin-right: auto;
			/* width: 100%; */
			max-width: 100%;
			object-fit: cover;

		}

		/* .category-content {
			flex: 1;
			padding: 20px 10px 0 20px;
		} */

		.content-details-2 {
			width: 96.5%;
		}

		.card {
			height: 245px;
		}

		.card-image {
			height: 170px;
			object-fit: cover;

		}

		.list-card-grid {
			grid-template-columns: repeat(3, 1fr);
		}
	}

	@media screen and (max-width: 520px) {

		.content-details-1 {
			width: 99%;
		}

		.category-box {
			display: flex;
			/* overflow: hidden; */
			flex-direction: column;
		}

		.category-box-img {
			padding-top: 20px;
			/* width: 40%; */
			width: 100%;
			object-fit: cover;
			display: block;
			margin-left: auto;
			margin-right: auto;
			/* min-width:80%; */

		}

		.btn-mobile {
			font-size: 13px;
		}

		.category-img {
			border: 1px solid #e4e4e4;
			display: block;
			margin-left: auto;
			margin-right: auto;
			/* width: 100%; */
			max-width: 100%;
			object-fit: cover;

		}

		/* .category-content {
			flex: 1;
			padding: 20px 10px 0 20px;
		} */

		.content-details-2 {
			width: 97%;
		}

		.card {
			height: 245px;
		}

		.card-image {
			height: 170px;
			object-fit: cover;
			/* object-fit: scale-down; */
		}

		.list-card-grid {
			grid-template-columns: repeat(2, 1fr);
		}
	}
</style>

<!-- Thông tin sách -->
<div class="content-details-1" style="padding-top: 60px;">
	<!-- <div class="shadow"> -->
	<div class="category-box">
		<div class="category-box-img" style="display: flex; flex-direction: column;">
			<img src="{{asset('public/uploads/'.$get_post->image_post)}}" alt="" class="category-img">

			<div class="button" style="display: block; margin-left: auto; margin-right: auto;">
				<a href="../public/uploads/{{$get_post->book_post}}" class="btn btn-primary mt-2 text-white btn-mobile" download>Downloads <i class="fas fa-download fa-lg"></i></a>
				<a id="showPDF01" onclick="validate() " class="btn btn-primary mt-2 text-white js-open btn-mobile">Read books <i class="fas fa-book-reader fa-lg" style="padding-bottom: 5px;"></i></a>
			</div>

		</div>
		<div class="category-content">
			<h1 id="title">{{$get_post->title_post}}</h1>
			<p id="date" class="d-inline">{{$get_post->created_at}} post by Admin</p>
			<p id="description">{!!$get_post->content_post!!}</p>
		</div>
	</div>
	<!-- </div> -->
	<!-- <div id="header_margin"></div> -->
</div>


<!-- Sách cùng danh mục -->
<div class="content-details-2">
	<div class="lienquan">Đầu sách cùng danh mục</div>
	<div class="list-card-grid">
		@foreach($relate as $key => $rep)

		<div class="card-gird">
			<div class="card">
				<div class="card-box-image">
					<a href="{{url('bai-viet/'.$rep->id_post)}}">
						<img src="{{asset('public/uploads/'.$rep->image_post)}}" alt="" class="card-image">
					</a>
				</div>
				<div class="card-content">
					<div class="card-top">
						<a href="{{url('bai-viet/'.$rep->id_post)}}">
							<h3 class="card-title">{{$rep->title_post}}</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

<!-- Hiển thị sách -->
<div class="modal">
	<div class="modal-container">
		<div class="modal-close js-modal-close">
			<i class="ti-close"></i>
		</div>
		<div id="header_open_book">
			<div id="loader"></div>
			<div id="embeddedView"></div>
		</div>
	</div>
</div>

<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script type="text/javascript">
	// show modal book
	const openBtns = document.querySelector(".js-open")
	const modal = document.querySelector(".modal")
	const modal_close = document.querySelector(".js-modal-close")

	function showBooks() {
		modal.classList.add("open")
	}

	function hideBooks() {
		modal.classList.remove("open")
	}
	openBtns.addEventListener('click', showBooks)
	modal_close.addEventListener('click', hideBooks)

	// Tăng chiều cao hiển thị books
	function validate() {
		// var header = document.getElementById("header_margin");
		// header_margin.style.margin = '2rem'
		var header = document.getElementById("header_open_book");
		header_open_book.style.height = 'calc(100% - 40px)'
	}

	//hiển thị book
	// const clientId = "bc1ef43ec37b4c659e966a262c0b55de";
	const clientId = "7dd7645a27dc4b42a2b168769147156a";
	// const clientId = "6fcdb1fa3a01478e8b3bc95dea20454d";

	const viewerOptions = {
		embedMode: "FULL_WINDOW",
		defaultViewMode: "FIT_PAGE",
		showDownloadPDF: false,
		showPrintPDF: false,
		showLeftHandPanel: true,
		showAnnotationTools: false
	};

	function fetchPDF(urlToPDF) {
		return new Promise((resolve) => {
			fetch(urlToPDF)
				.then((resolve) => resolve.blob())
				.then((blob) => {
					resolve(blob.arrayBuffer());
				})
		})
	}

	function loadPDF(urlToPDF) {

		document.getElementById("loader").style.display = "unset";

		var adobeDCView = new AdobeDC.View({
			clientId: clientId,
			divId: "embeddedView"
		});
		var previewFilePromise = adobeDCView.previewFile({
				content: {
					promise: fetchPDF(urlToPDF)
				},
				metaData: {
					fileName: urlToPDF.split("/").slice(-1)[0]
				}
			},
			viewerOptions
		);
		const eventOptions = {
			listenOn: [AdobeDC.View.Enum.Events.APP_RENDERING_DONE],
			enableFilePreviewEvents: true
		}
		adobeDCView.registerCallback(
			AdobeDC.View.Enum.CallbackType.EVENT_LISTENER,
			function(event) {
				if (event.type == "APP_RENDERING_DONE") {
					showLoadedPDF(event);
				}
			}, eventOptions
		);
	}

	function showLoadedPDF() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("embeddedView").style.display = "unset";
	}
	document.addEventListener("adobe_dc_view_sdk.ready", function() {
		document.getElementById("showPDF01").addEventListener("click", function() {
			loadPDF("../public/uploads/{{$get_post->book_post}}")
		});
	});
	// Add arrayBuffer if necessary i.e. Safari
	(function() {
		if (Blob.arrayBuffer != "function") {
			Blob.prototype.arrayBuffer = myArrayBuffer;
		}

		function myArrayBuffer() {
			return new Promise((resolve) => {
				let fileReader = new FileReader();
				fileReader.onload = () => {
					resolve(fileReader.result);
				};
				fileReader.readAsArrayBuffer(this);
			});
		}
	})();
</script>








<!-- <div id="pspdfkitt" style="height: 100vh"></div>
<script src="../public/assets/pspdfkit.js"></script>
<script>
	PSPDFKit.load({
			container: "#pspdfkitt",
			document: "../public/uploads/{{$get_post->book_post}}", // Add the path to your document here.
		})
		.then(function(instance) {
			console.log("PSPDFKit loaded", instance);
		})
		.catch(function(error) {
			console.error(error.message);
		});
</script>

<iframe src="../public/uploads/{{$get_post->book_post}}#page=10&view=fitH,100" style="width:100%; height:100vh;" frameborder="0"></iframe> -->

@endsection