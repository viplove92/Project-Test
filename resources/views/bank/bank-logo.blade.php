@if($banks->bank == 'ICICI BANK LIMITED')
    <img src="../images/banks/icici.png" width="250" height="auto">
@elseif($banks->bank == 'AXIS BANK')
    <img src="../images/banks/axis.png" width="250" height="auto">
@elseif($banks->bank == 'STATE BANK OF INDIA')
    <img src="../images/banks/sbi.png" width="250" height="auto">
@elseif($banks->bank == 'ORIENTAL BANK OF COMMERCE')
    <img src="../images/banks/obc.png" width="250" height="auto">
@elseif($banks->bank == 'IDBI BANK')
    <img src="../images/banks/idbi.png" width="250" height="auto">
@elseif($banks->bank == 'BANK OF INDIA')
    <img src="../images/banks/boi.png" width="250" height="auto">
@else
    <img src="../images/complaints/blank-complaint.png" width="250" height="auto">
@endif