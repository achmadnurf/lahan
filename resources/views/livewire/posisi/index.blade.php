<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Posisi</h4>
                </div>
                
                <div class="card-footer text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div wire:ignore id='map' style='width: 100%; height: 400px;'>
                            </div>
                            </div>
                            <div class="card-body">
                                <h4>Koordinat</h4>
                                <div class="form-group">
                                    <label>Longtitude</label>
                                    <input wire:model="long" type="text" class="form-control">
                                    <label>Lattitude</label>
                                    <input wire:model="lat" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            
                        
                    </div>
                    <div id="map"></div>
 
<div id="menu">
<input id="satellite-v9" type="radio" name="rtoggle" value="satellite" checked="checked">
<!-- See a list of Mapbox-hosted public styles at -->
<!-- https://docs.mapbox.com/api/maps/styles/#mapbox-styles -->
<label for="satellite-v9">satellite</label>
<input id="light-v10" type="radio" name="rtoggle" value="light">
<label for="light-v10">light</label>
<input id="dark-v10" type="radio" name="rtoggle" value="dark">
<label for="dark-v10">dark</label>
<input id="streets-v11" type="radio" name="rtoggle" value="streets">
<label for="streets-v11">streets</label>
<input id="outdoors-v11" type="radio" name="rtoggle" value="outdoors">
<label for="outdoors-v11">outdoors</label>
</div>
                    
                    @push('scripts')
                    
                    
                    <script>
                        document.addEventListener('livewire:load', () => {
                            const defaultLocation = [107.59553394562141, -6.951939580144085]
                      mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
                      var map = new mapboxgl.Map({
                        container: 'map',
                        center: defaultLocation,
                        zoom: 11.15,
                        style: 'mapbox://styles/mapbox/streets-v11'
                      });
                        
                        const layerList = document.getElementById('menu');
                        const inputs = layerList.getElementsByTagName('input');
                        
                        for (const input of inputs) {
                        input.onclick = (layer) => {
                        const layerId = layer.target.id;
                        map.setStyle('mapbox://styles/mapbox/' + layerId);
                        };
                        }
                        

                      //search
                      map.addControl(
                          new MapboxGeocoder({
                              accessToken: mapboxgl.accessToken,
                              mapboxgl: mapboxgl
                          })
                      )

                      

                      

                      map.addControl(new mapboxgl.NavigationControl())

                      map.on('click', (e) => {
                          const longtitude = e.lngLat.lng
                          const lattitude = e.lngLat.lat

                          console.log({longtitude, lattitude});
                          @this.long = longtitude
                          @this.lat = lattitude
                      })


                        })
                      
                    </script>
                    
                    @endpush

                </div>
            </div>
        </div>
    </div>
</div>