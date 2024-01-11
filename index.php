<?php 

$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
$url = $_SERVER['HTTP_HOST'];
$relpath = substr(str_replace('\\', '/', realpath(dirname(__FILE__))), strlen(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']))));

$colours = [
    "colour_01" => "#354F61",
    "colour_02" => "#BC7680",
    "colour_03" => "#A995C7",
    "colour_04" => "#000000",
    "colour_05" => "#ffffff",
];

$individual = [
    [
        $personal = [
            "title" => "mr",
            "name" => "cameron",
            "surname" => "keating",
            "role" => "Specialist Plastic & <br>Reconstructive Surgeon",
            "credentials" => $credentials = [
                "MBBS-BMedSc (Melb)",
                "PGDipSurgAnat (Melb) FRACS",
            ],
        ],
        $corporate = [
            "address" => "Level 1, 34 Argyle St, Hobart TAS 7000",
            "map_link" => "https://www.google.com/maps/place/34+Argyle+St,+Hobart+TAS+7000/@-42.8811219,147.3295091,17z/data=!3m1!4b1!4m6!3m5!1s0xaa6e7584996dca6f:0xa57ffe179b2b819f!8m2!3d-42.8811219!4d147.3295091!16s%2Fg%2F11ckqrwy15?entry=ttu",
            "phone" => "03 6128 3344",
            "fax" => "03 6285 8075",
            "email" => "clinic@hobartplasticsurgery.com",
            "site_url" => "hobartplasticsurgery.com.au",
            "healthlink_id" => "hobplast",
            "provider_number" => "262586VB",
        ]
    ],
];



?>
<table style="font-family: Arial, Helvetica, sans-serif; color:<?php echo $colours['colour_01']; ?>;">
    <tbody>
        <tr>
            <td>
            <table style="color: inherit; padding-bottom: 20px;">
                    <tr style="display: flex;">
                        <td style="padding-right: 30px; border-right: 1px solid; display: flex; flex-direction: column;">
                            <div id="name" style="color: inherit; font-size: 10pt; line-height: 12pt; font-weight: bold;"><?php echo ucwords($individual[0][0]['title'] . ' ' . $individual[0][0]['name'] . ' ' . $individual[0][0]['surname']); ?></div>
                            <div id="role" style="color: inherit; font-size: 8pt; line-height: 10pt; padding-bottom: 6px;"><?php echo ucwords($individual[0][0]['role']); ?></div>
                            <div id="credentials" style="color: inherit; font-size: 6pt; line-height: 8pt;"><?php foreach( $credentials as $credential) { echo $credential . '<br>'; } ?></div>
                            
                        </td>
                        <td style="padding-left: 30px; display: flex; flex-direction: column;">
                            <a id="address" href="<?php echo $individual[0][1]['map_link']; ?>" target="_blank" style="color: inherit; font-size: 8pt; padding-bottom: 3px; text-decoration: none;"><?php echo $individual[0][1]['address']; ?></a>
                            <span style="color: inherit; font-size: 8pt; padding-bottom: 3px;">P <a id="phone" href="tel:<?php echo str_replace(' ', '', $individual[0][1]['phone']); ?>" style="color: inherit; text-decoration: none; text-decoration: none;"><?php echo $individual[0][1]['phone']; ?></a>  F <a href="tel:<?php echo str_replace(' ', '', $individual[0][1]['fax']); ?>" id="fax" style="color: inherit; text-decoration: none;"><?php echo $individual[0][1]['fax']; ?></a></span>
                            <span style="color: inherit; font-size: 8pt; padding-bottom: 3px;">E <a id="email" href="mailto:<?php echo $individual[0][1]['email']; ?>" style="color: inherit; text-decoration: none;"><?php echo $individual[0][1]['email']; ?></a></span>
                            <a id="website" href="https://<?php echo $individual[0][1]['site_url'];?>" target="_blank" style="color: inherit; font-size: 8pt; padding-bottom: 6px; text-decoration: none;"><?php echo $individual[0][1]['site_url'];?></a>
                            <span style="color: inherit; font-size: 6pt;">Healthlink ID: <?php echo $individual[0][1]['healthlink_id']; ?>   Provider number: <?php echo $individual[0][1]['provider_number']; ?></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td style="padding-bottom: 20px;">
                <img src="<?php echo $protocol . $url . $relpath . '/hps_trio.png'; ?>" alt="Hobart Plastic Surgery" style="width: 500px">
            </td>
        </tr>
        <tr>
            <td style="font-size:6pt; text-align: justify; max-width: 380px; line-height: 8pt">
            The email and any attachment is intended solely for the named addresses and may contain confidential and/or legally privileged material. Any review, disclosure, dissemination, or other use of, or taking of any action in reliance upon this information by persons or entities other than the intended recipient is prohibited and may result in severe penalties. If you received this email in error, please phone Hobart Plastic Surgery and Hobart Breast Aesthetics on <a href="tel:0361283344" style="color:inherit; text-decoration: none;" >(03) 6128 3344</a>.
            </td>
        </tr>
    </tbody>
</table>