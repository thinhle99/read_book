@extends('../layout')
@section('content')
<link rel="stylesheet" href="../public/css/details.css" />

<style type="text/css">

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