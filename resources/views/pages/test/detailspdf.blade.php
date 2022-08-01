@extends('../layout')
@section('content')
<link rel="stylesheet" href="../public/css/main.css" />

<style type="text/css">
	/* ul.baivietlienquan li {
    font-size: 20px;
    text-transform: uppercase;
  
} */
	ul.baivietlienquan li a {
		/* text-decoration: none; */
		color: #000;
	}
	#embeddedView {
  display: none;
  height: 100%;
  width: 100%;
}

#loader {
  background-image: url("https://assets.codepen.io/4479906/loader.gif");
  background-repeat: no-repeat;
  background-position: center;
  width: 100%;
  height: 100%;
  display: none;
}

#buttonHolder {
  display: flex;
  flex-wrap: nowrap;
  align-content: center;
  justify-content: center;
  flex-direction: column;
}

button {
  background-color: #4caf50;
  border: none;
  padding: 15px 32px;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border-radius: 10px;
  margin: 10px auto;
  cursor: pointer;
  display: block;
}
</style>

<div class="container">
	<div class="jumbotron">
		<img class="card-img-top" src="{{asset('public/uploads/'.$get_post->image_post)}}" alt="Card image cap">
		<h1 style="margin-top: 2rem;">{{$get_post->title_post}}</h1>
		<!-- class="display-4" -->
		<p style="margin-top: 0.5rem;"> {{$get_post->created_at}} post by Admin</p>
		<!-- <p class="lead">{!!$get_post->summary_post!!}</p> -->
		<hr class="my-4">
		<p>{!!$get_post->content_post!!}</p>
		<div id="header">
		<div id="buttonHolder">
			<button id="showPDF01" onclick="validate() ">Show PDF</button>
		</div>
			<div id="loader"></div>
			<div id="embeddedView"></div>
		</div>

	</div>

	<div class="jumbotron">

		<h1>Có thể bạn quan tâm</h1>
		<ul>
			@foreach($relate as $key => $rep)
			<li><a href="{{url('bai-viet/'.$rep->id_post)}}" style="font-size:20px; color: #000;">{{$rep->title_post}}</a></li>
			@endforeach
		</ul>

	</div>
</div>

<footer class="py-5 bg-dark">
	<div class="container-fluid">
		<p class="m-0 text-center text-white">Copyright &copy; By Le Xuan Thinh 2021</p>
		<p class="m-0 text-center text-white">Hotline : 035099001462</p>
		<p class="m-0 text-center text-white">Đơn vị công tác: Hà Nội</p>
	</div>
</footer>

<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>

	<script type="text/javascript">
		function validate() {
			var header = document.getElementById("header");
			header.style.height = '98vh'
		}

		const clientId = "bc1ef43ec37b4c659e966a262c0b55de";
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

			document.getElementById("buttonHolder").style.display = "none";
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