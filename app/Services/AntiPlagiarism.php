<?php

namespace App\Services;

use PhpOffice\PhpWord\IOFactory;

class AntiPlagiarism
{
    public function compareDocuments($filePath1, $filePath2)
    {
        $doc1 = IOFactory::load($filePath1);
        $doc2 = IOFactory::load($filePath2);

        // extract text from documents
        $text1 = $this->extractText($doc1);
        $text2 = $this->extractText($doc2);

        // compare texts
        $similarities = $this->findSimilarities($text1, $text2);

        return $similarities;
    }

    private function extractText($doc)
    {
        $text = '';
        foreach ($doc->getSections() as $section) {
            foreach ($section->getElements() as $element) 
            {
                if (method_exists($element, 'getText')) 
                {
                    $text .= $element->getText() . ' ';
                }
            }
        }
        return $text;
    }

    private function findSimilarities($text1, $text2)
    {
        // compare words, get results lol
        $words1 = explode('.', $text1);
        $words2 = explode('.', $text2);

        $similarities = array_intersect($words1, $words2);

        return [
            'similarity_perc' => (count($similarities) * 100) / count($words1),
            //'similar_words' => $similarities
        ];
    }
}
