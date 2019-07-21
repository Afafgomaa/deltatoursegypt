
<div  class="scroll_pane_new hidden-xs active">
    <div class="program_box">
        <div class="program_box_title text-blue" id="Pricing">Pricing</div>
            <div class="tab-pane active">
                <div class="row">
                    <div class="col-md-12">
                          <table class="table table-striped push-top">
        <tbody>
           
         @if(!empty($allPricingsDvided[0]))
            @foreach($allPricingsDvided[0] as $p)
                 <td> {{$p}} </td>
            @endforeach
        @endif
            </tr>
            <tr>
          @if(!empty($allPricingsDvided[1]))
            @foreach($allPricingsDvided[1] as $p)
                 <td> {{$p}} </td>
            @endforeach
          @endif
            </tr>
        </tbody>
    </table>
                </div>
        </div>
    </div>							
</div>
</div> 


  
     
