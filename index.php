<?php
/**
 * This file gets the resolved name of urls. It was done to help sort out what sites
 * are on UBC CMS
 * 
 * PHP version 5
 * 
 * @category UBC_CMS_Tools
 * @package  FOM_CMS_Tools
 * @author   Graham Douglas <graham.douglas@ubc.com>
 * @license  MIT http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     http://pear.php.net/package/fom-tools
 **/

echo '<h1>Domain Names from a list of unmapped domains</h1>';

ini_set('max_execution_time', 300);
$urls = array(
    'http://addictionmedicine.med.ubc.ca',
    'http://allergy.med.ubc.ca',
    'http://alpmcalgary2015.med.ubc.ca',
    'http://anesthesia.ubc.ca',
    'http://apt.med.ubc.ca',
    'http://apt.ubc.ca',
    'http://arts.med.ubc.ca',
    'http://av-gaylab.med.ubc.ca',
    'http://bchtc.med.ubc.ca',
    'http://bcmd10.med.ubc.ca',
    'http://biochem.med.ubc.ca',
    'http://bmvcontest.med.ubc.ca',
    'http://brainlab.med.ubc.ca',
    'http://brainmattersvanreg.med.ubc.ca',
    'http://brc.ubc.ca',
    'http://cdpp.med.ubc.ca',
    'http://cell.med.ubc.ca',
    'http://cellphys.med.ubc.ca',
    'http://chd.med.ubc.ca',
    'http://cimihc.med.ubc.ca',
    'http://cip.med.ubc.ca',
    'http://cms.med.ubc.ca',
    'http://core.ubc.ca',
    'http://cps.med.ubc.ca',
    'http://crhr.med.ubc.ca',
    'http://cryoem.med.ubc.ca',
    'http://cs4hs.med.ubc.ca',
    'http://cs4hsp.med.ubc.ca',
    'http://csl.med.ubc.ca',
    'http://derm.med.ubc.ca',
    'http://dmm.med.ubc.ca',
    'http://earlylabourresearch.med.ubc.ca',
    'http://ehits.med.ubc.ca',
    'http://emergency.med.ubc.ca',
    'http://endocrinology.medicine.ubc.ca',
    'http://familymed.med.ubc.ca',
    'http://familymed.ubc.ca',
    'http://familypracticecentre.familymed.ubc.ca',
    'http://gastro.med.ubc.ca',
    'http://gsresidency.surgery.med.ubc.ca',
    'http://heartfelt.med.ubc.ca',
    'http://hematology.med.ubc.ca',
    'http://hotelstudy.med.ubc.ca',
    'http://imonline.med.ubc.ca',
    'http://imp.med.ubc.ca',
    'http://integratedclerkships.med.ubc.ca',
    'http://internationalsurgery.med.ubc.ca',
    'http://langelab.med.ubc.ca',
    'http://maa.med.ubc.ca',
    'http://mangeslab.med.ubc.ca',
    'http://masterteacher.med.ubc.ca',
    'http://matsubaralab.med.ubc.ca',
    'http://med.ubc.ca',
    'http://medgen.ubc.ca',
    'http://medgen.med.ubc.ca',
    'http://medicine.ubc.ca',
    'http://medicine.med.ubc.ca',
    'http://mgm.med.ubc.ca',
    'http://midwiferyclinicallocations.med.ubc.ca',
    'http://millerresearch.osot.med.ubc.ca',
    'http://modules.psychiatry.med.ubc.ca',
    'http://mriresearch.med.ubc.ca',
    'http://mriscience.med.ubc.ca',
    'http://msgeneticslab.med.ubc.ca',
    'http://mus.med.ubc.ca',
    'http://neurocontest.med.ubc.ca',
    'http://neurology.med.ubc.ca',
    'http://ngs.med.ubc.ca',
    'http://obgyn.ubc.ca',
    'http://obgyn.med.ubc.ca',
    'http://ophthalmology.med.ubc.ca',
    'http://orthosurgery.med.ubc.ca',
    'http://osot.med.ubc.ca',
    'http://parlab.med.ubc.ca',
    'http://pasa.pathology.ubc.ca',
    'http://paski.med.ubc.ca',
    'http://pathology.med.ubc.ca',
    'http://pathways.med.ubc.ca',
    'http://pharmacology.ubc.ca',
    'http://polqm.med.ubc.ca',
    'http://precepting101.familymed.ubc.ca',
    'http://psychiatry.med.ubc.ca',
    'http://psychiatry-day.psychiatry.ubc.ca',
    'http://radiology.med.ubc.ca',
    'http://rbc.med.ubc.ca',
    'http://rd.psychiatry.med.ubc.ca',
    'http://registeryonglab.med.ubc.ca',
    'http://rehab.ubc.ca',
    'http://rheumatology.med.ubc.ca',
    'http://rhsrnbc.med.ubc.ca',
    'http://ricap.med.ubc.ca',
    'http://rsec.med.ubc.ca',
    'http://sad.psychiatry.ubc.ca',
    'http://sadovnickresearch.med.ubc.ca',
    'http://scholarlyactivity.psychiatry.med.ubc.ca',
    'http://socialmedicinebc.ubc.ca',
    'http://sps3.med.ubc.ca',
    'http://stratplan.med.ubc.ca',
    'http://surgery.med.ubc.ca',
    'http://surgicalfoundations.surgery.med.ubc.ca',
    'http://tcmp.med.ubc.ca',
    'http://ubcmj.med.ubc.ca',
    'http://urology.med.ubc.ca',
    'http://vec.med.ubc.ca',
    'http://viaulab.med.ubc.ca',
    'http://wcpirn.med.ubc.ca',
    'http://workingwithdepression.psychiatry.ubc.ca',
    'http://yonglab.med.ubc.ca',
    'http://aboriginalhealth.med.ubc.ca',
    'http://acdresearch.med.ubc.ca',
    'http://admissionmyths.med.ubc.ca',
    'http://admissionsblog.med.ubc.ca',
    'http://airwaysresearch.med.ubc.ca',
    'http://allanmcgavin.med.ubc.ca',
    'http://alumni.med.ubc.ca',
    'http://artasadjuvant.med.ubc.ca',
    'http://arthritis.rehab.med.ubc.ca',
    'http://bccgn.med.ubc.ca',
    'http://birthplacelab.med.ubc.ca',
    'http://brain.rehab.med.ubc.ca',
    'http://breastcancerprevention.med.ubc.ca',
    'http://brottolab.med.ubc.ca',
    'http://carms.familymed.ubc.ca',
    'http://ccphe.familymed.ubc.ca',
    'http://cepl.rehab.med.ubc.ca',
    'http://ches.med.ubc.ca',
    'http://clinfac.familymed.ubc.ca',
    'http://clinic.familymed.ubc.ca',
    'http://cogmob.rehab.med.ubc.ca',
    'http://cpdjournalclub.med.ubc.ca',
    'http://cpep.rehab.med.ubc.ca',
    'http://cr.med.ubc.ca',
    'http://cs-vfmp.med.ubc.ca',
    'http://depressionresearch.psychiatry.ubc.ca',
    'http://digem.med.ubc.ca',
    'http://education.med.ubc.ca',
    'http://ehealth.med.ubc.ca',
    'http://elearning.globalhealth.med.ubc.ca',
    'http://emerg.med.ubc.ca',
    'http://emglab.rehab.med.ubc.ca',
    'http://epims.med.ubc.ca',
    'http://exp.med.ubc.ca',
    'http://facdev.familymed.ubc.ca',
    'http://facdev.med.ubc.ca',
    'http://facilities.med.ubc.ca',
    'http://gim.med.ubc.ca',
    'http://giving.med.ubc.ca',
    'http://globalhealth.med.ubc.ca',
    'http://grad.pathology.ubc.ca',
    'http://grad-postdoc.med.ubc.ca',
    'http://graham.med.ubc.ca',
    'http://hepatitiseducation.med.ubc.ca',
    'http://hometelehealth.med.ubc.ca',
    'http://id.med.ubc.ca',
    'http://imgbc.med.ubc.ca',
    'http://mablab.rehab.med.ubc.ca',
    'http://maternitycarecalendar.med.ubc.ca',
    'http://mdprogram.med.ubc.ca',
    'http://midwiferyclinicalresources.med.ubc.ca',
    'http://muscle.rehab.ubc.ca',
    'http://nauslab.med.ubc.ca',
    'http://nephrology.medicine.ubc.ca',
    'http://neuroethics.med.ubc.ca',
    'http://neuroimmunology.med.ubc.ca',
    'http://neurorehab.med.ubc.ca',
    'http://neurosurgery.med.ubc.ca',
    'http://ober.pathology.ubc.ca',
    'http://oncologygroup.mus.med.ubc.ca',
    'http://orthopaedics.med.ubc.ca',
    'http://orthopedics.med.ubc.ca',
    'http://pal.rehab.med.ubc.ca',
    'http://palliativecare.med.ubc.ca',
    'http://partnership.familymed.ubc.ca',
    'http://pediatrics.med.ubc.ca',
    'http://pfc.med.ubc.ca',
    'http://pge-psychiatry.med.ubc.ca',
    'http://physicaltherapy.med.ubc.ca',
    'http://postgrad.familymed.ubc.ca',
    'http://postgrad.med.ubc.ca',
    'http://postgrad.radiology.med.ubc.ca',
    'http://prrl.rehab.med.ubc.ca',
    'http://pt.med.ubc.ca',
    'http://rehab.med.ubc.ca',
    'http://research.biochem.ubc.ca',
    'http://research.familymed.ubc.ca',
    'http://residency.apt.med.ubc.ca',
    'http://respiratory.med.ubc.ca',
    'http://rsvp.facdev.med.ubc.ca',
    'http://sace.med.ubc.ca',
    'http://scholarlyactivity.psychiatry.ubc.ca',
    'http://sio.pediatrics.med.ubc.ca',
    'http://sites.olt.ubc.ca',
    'http://spinepal.med.ubc.ca',
    'http://spinepal.orthopaedics.med.ubc.ca',
    'http://sportsmedicine.med.ubc.ca',
    'http://steidllab.med.ubc.ca',
    'http://strategicplan.med.ubc.ca',
    'http://test-cms.med.ubc.ca',
    'http://thischangedmyteaching.med.ubc.ca',
    'http://ubcsurgicalclub.mus.med.ubc.ca',
    'http://undergrad.familymed.ubc.ca',
    'http://undergrad.radiology.med.ubc.ca',
    'http://usccp.orthopaedics.med.ubc.ca',
    'http://usccp.orthopedics.med.ubc.ca',
    'http://ustop.orthopaedics.med.ubc.ca',
    'http://ustop.orthopedics.med.ubc.ca',
    'http://vfmpfacdev.med.ubc.ca',
    'http://vitality.med.ubc.ca',
    'http://wordpress.med.ubc.ca',
);


echo '<table><thead><tr><td>Index</td><td>Source</td><td>Resolves As
</td></tr></thead><tbody>';

$index = 0;
$ch    = curl_init();
ignore_user_abort(true);
set_time_limit(0);

ob_start();
// do initial processing here
echo $response; // send the response
header('Connection: close');
header('Content-Length: '.ob_get_length());
ob_end_flush();
ob_flush();
flush();

/**
 * Does something interesting
 *
 * @param array $urls gets the domain for each site in this list
 * 
 * @throws Some_Exception_Class If something interesting cannot happen
 * @return Status
 */ 
function getUrls($urls)
{
    foreach ( $sites as $site ) {
        $index ++;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, true);
        // Must be set to true so that PHP follows any "Location:" header.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $a = curl_exec($ch); // $a will contain all headers
        // This is what you need, it will return you the last effective URL.
        $final_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL); 
        /*
        Uncomment to see all headers
        echo "<pre>";
        print_r($a);echo"<br>";
        echo "</pre>";
        */
        echo '<tr><td>' . filter_var($index, FILTER_SANITIZE_NUMBER_INT).'</td><td>'
        .filter_var($url, FILTER_SANITIZE_URL) . '</td><td>'
        .filter_var($final_url, FILTER_SANITIZE_URL).'</td></tr>';
    }
}
echo '</tbody></table>';
