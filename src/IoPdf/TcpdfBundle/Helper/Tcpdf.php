<?php

/**
 * TCPDF Bridge 
 *
 * @author ioalessio
 */

namespace IoPdf\TcpdfBundle\Helper;

use Symfony\Component\HttpFoundation\Response;

class Tcpdf extends \TCPDF {

    public function init($certificato) {



        // set document information
        $this->SetCreator(PDF_CREATOR);
        $this->SetAuthor('Alessio');
        $this->SetTitle('Test');
        $this->SetSubject('TCPDF test');
        $this->SetKeywords('TCPDF, PDF, example, test, guide');




//        // set default header data
//        $this->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING);
//
//        // set header and footer fonts
//        $this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//        $this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
//
//        // set default monospaced font
//        $this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
//
//        //set margins
//        $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//        $this->SetHeaderMargin(PDF_MARGIN_HEADER);
//        $this->SetFooterMargin(PDF_MARGIN_FOOTER);
//
//        //set auto page breaks
//        $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//
//        //set image scale factor
//        $this->setImageScale(PDF_IMAGE_SCALE_RATIO);
//
//        // ---------------------------------------------------------
//        // set default font subsetting mode
//        $this->setFontSubsetting(true);
//
//        // Set font
//        // dejavusans is a UTF-8 Unicode font, if you only need to
//        // print standard ASCII chars, you can use core fonts like
//        // helvetica or times to reduce file size.
//        $this->SetFont('dejavusans', '', 14, '', true);
        // Add a page
        // This method has several options, check the source code documentation for more information.





        $this->AddPage();


        /* header */

        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        // $img_file = K_PATH_IMAGES. $certificato;        
        $img_file = $certificato;
        //$this->setCertificato($certificato);

        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
    }

    /**
     */
    public function quick_pdf($html, $file = "html.pdf", $format = "S", $certificato) {


        $this->init($certificato);

        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $this->writeHTML($html, true, false, true, false, '');

        $response = new Response($this->Output($file, $format));
        $response->headers->set('Content-Type', 'application/pdf');
        return $response;
    }

}