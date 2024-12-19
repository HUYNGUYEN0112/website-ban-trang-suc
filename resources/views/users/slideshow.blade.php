<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer" style="width:95%"  >
	    <div class="banner">
				<ul>
                @foreach($slide as $slides)
                    <li>
						<img src="resource/slide/{{$slides->image}}"  alt="anh bia 2" />

                    </li>
                    @endforeach
                    <!--
					<li>
						<img src="source/image/slide/slider_5.png" alt="anh bia 3" />

					</li>
					<li>
						<img src="source/image/slide/slider_6.png" alt="anh bia 4" />

					</li>
					<li>
						<img src="source/image/slide/slider_7.png" alt="anh bia 5" />

                    </li>
                -->
				</ul>
			</div>
		</div>

		<div class="tp-bannertimer"></div>
	</div>
</div>
