Vim�UnDo� ~�Z�|�(���}�fG�/��,�h	��+p                                     dj1   	 _�                     �        ����                                                                                                                                                                                                                                                                                                                                                             dWI    �   �   �   �       5��    �                   *   Y              *       5�_�                   t   %    ����                                                                                                                                                                                                                                                                                                                            t   %       t   (       v   (    dc6    �   s   u   �      j    function updateTable(notTicket = null, startDate = null, endDate = null, status = null, name = null) {5��    s   %                 P                    5�_�                    f        ����                                                                                                                                                                                                                                                                                                                            t   %       t   (       v   (    de�     �   f   j   �                      // �   g   h   �    �   f   h   �    5��    f                      �                     �    f                 
   �             
       �    f                    �              Q       5�_�                    h       ����                                                                                                                                                                                                                                                                                                                            w   %       w   (       v   (    df	     �   g   h          ,                    row.LastUpdated = "N/A";5��    g                            -               5�_�                    h       ����                                                                                                                                                                                                                                                                                                                            v   %       v   (       v   (    df     �   g   i   �                      }5��    g                     "                     5�_�                    q       ����                                                                                                                                                                                                                                                                                                                            v   %       v   (       v   (    df     �   p   s   �                      ]);5��    p                     <                     �    p                     <                     �    p                     <                     �    q                      =                     5�_�      	              g   ,    ����                                                                                                                                                                                                                                                                                                                            w   %       w   (       v   (    df     �   g   q   �                          �   h   i   �    �   f   i   �      ,                if(row.LastUpdated == null){5��    f   ,                                       �    g                                           �    g                    %                    5�_�      
           	   o       ����                                                                                                                                                                                                                                                                                                                            �   %       �   (       v   (    df#     �   n   o          #                    row.LastUpdated5��    n                      �      $               5�_�   	              
   m       ����                                                                                                                                                                                                                                                                                                                               %          (       v   (    df%     �   l   m                              row.Stats,5��    l                      �                     5�_�   
                 i       ����                                                                                                                                                                                                                                                                                                                            ~   %       ~   (       v   (    dfF     �   h   j   �                          row.ID,5��    h                     I                     5�_�                    i       ����                                                                                                                                                                                                                                                                                                                            ~   %       ~   (       v   (    dfH     �   h   j   �      !                    row.TicketID,5��    h                    I                    5�_�                    j       ����                                                                                                                                                                                                                                                                                                                            ~   %       ~   (       v   (    dfL     �   i   k   �      #                    row.AssignedTo,5��    i          
          k      
              5�_�                    k       ����                                                                                                                                                                                                                                                                                                                            ~   %       ~   (       v   (    dfR     �   j   l   �                          row.Org,5��    j                     �                     �    j                    �                    5�_�                    l       ����                                                                                                                                                                                                                                                                                                                            ~   %       ~   (       v   (    dfW    �   k   m   �                           row.Summary,5��    k                    �                    �    k                     �                     �    k                     �                     �    k                    �                    �    k                    �                    �    k                    �                    5�_�                    k       ����                                                                                                                                                                                                                                                                                                                            ~   %       ~   (       v   (    df�    �   k   m   �       �   l   m   �    �   k   m   �    5��    k                      �                     �    k                   $   �              $       5�_�                    l       ����                                                                                                                                                                                                                                                                                                                               %          (       v   (    df�     �   k   m   �      $                    row.PublicEntry,5��    k                     �                     5�_�                    l       ����                                                                                                                                                                                                                                                                                                                               %          (       v   (    df�     �   k   m   �      #                    row.Publicntry,5��    k                     �                     5�_�                    l       ����                                                                                                                                                                                                                                                                                                                               %          (       v   (    df�     �   k   m   �      "                    row.Publictry,5��    k                     �                     5�_�                    l       ����                                                                                                                                                                                                                                                                                                                               %          (       v   (    df�     �   k   m   �      !                    row.Publicry,5��    k                     �                     5�_�                    l       ����                                                                                                                                                                                                                                                                                                                               %          (       v   (    df�    �   k   m   �                           row.Publicy,5��    k                     �                     5�_�                    �   '    ����                                                                                                                                                                                                                                                                                                                               %          (       v   (    dg    �   �   �          *                    console.log(response);5��    �                      �      +               5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            �          �   
       V       di�     �   �   �   �    �   �   �   �    �   �   �              <div class="row">   -        <div class="grid text-center col-12">                <h1>Ticket Logs</h1>                  8            <div class="fixed-top" style="left:94%">       p                <button type="button" id="resetFilters" class="btn btn-outline-secondary">Reset Filters</button>               </div>       >            <div class="fixed-top" style="right:93%;top:40%;">   ,                <ul class="nav flex-column">   %                <li class="nav-item">   `                    <a class="nav-link active" aria-current="page" href="/Homepage.php">Home</a>                   </li>   %                <li class="nav-item">   G                    <a class="nav-link" href="/TicketLogs.php">Logs</a>                   </li>   %                <li class="nav-item">   G                    <a class="nav-link disabled" href="#">Downloads</a>                   </li>   %                <li class="nav-item">   E                    <a class="nav-link disabled" href="#">Manuals</a>                   </li>   %                <li class="nav-item">   J                    <a class="nav-link" href="/otherTest.php">Dev-Page</a>                   </li>                   </ul>               </div>           </div>   
    </div>5��    �                      �      �              �    �                      �              �      5�_�                     �        ����                                                                                                                                                                                                                                                                                                                            �           �   '       V       dj0   	 �   �     �    �   �   �   �    5��    �                      �#              7      5�_�                    �   $    ����                                                                                                                                                                                                                                                                                                                            �   $       �   '       v   '    db�    �   �   �   �      ;                        updateTable(false, '', '', '', '');5��    �   $                 �!                    5��