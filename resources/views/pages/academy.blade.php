<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                
                
                 @if (count($artifacts) < 1)
                <li class="cbp-slider-item">
                    
                        <img src="{{ URL::asset('/theme/no-img.png')}}" alt="">
                </li>
                @else
                @foreach ($artifacts as $arti)
                
                <li class="cbp-slider-item">
                    
                        <img src={{ URL::asset($arti->artifact_url)}} alt="" height = "242px">
                </li>
            @endforeach
             @endif
                
            </ul>
        </div>
    </div>
    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title">{{$academy->academy_name}}</div>
       
       
        
        <div class="cbp-l-inline-subtitle"> <i class="fa fa-location-arrow"></i> {{$academy->address}}, {{$academy->city}}, {{$academy->country}}</div>
         <div class="cbp-l-inline-subtitle">TimeSlot : {{
             str_replace(";"," to ",$academy->timeslot)
             }}</div>
        <div class="cbp-l-inline-subtitle">Contact Person : {{$academy->contact_person}}</div>
        <div class="cbp-l-inline-subtitle">Email : {{$academy->email}}</div>
        <div class="cbp-l-inline-subtitle">Phone : {{$academy->phone}}</div>
        
        <div class="cbp-l-inline-subtitle"><i class="fa fa-tags"></i> Tags : 
            
            @foreach ($tags as $tag)
            <b>{{$tag->tag_name}}</b>, 
            @endforeach
            
            
        
        <div class="cbp-l-inline-desc">{{$academy->description}}</div>
         
    </div>
</div>
