<?php

namespace App\Jobs;

use App\Models\Document;
use App\Models\Project;
use App\Services\AntiPlagiarism;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AntiPlagiarismJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $documentId;
    protected $projectId;

    /**
     * Create a new job instance.
     * @return void
     */
    public function __construct($documentId, $projectId)
    {
        $this->documentId = $documentId;
        $this->projectId = $projectId;
    }

    /**
     * Execute the job.
     * @return void
     */
    public function handle(AntiPlagiarism $antiPlagiarism): void
    {
        $document = Document::where('id', $this->documentId)->first();
        if($document)
        {
            $allDocs = Document::where('file_path', '!=', $document->file_path)->get();
            $report = [];
            foreach($allDocs as $doc)
            {
                $results = $antiPlagiarism->compareDocuments($document->file_path, $doc->file_path);
                $report[] = [
                    'document_id' => $doc->id,
                    'results' => $results
                ];

            }

            $project = Project::where('id', $this->projectId)->first();
            if($project)
            {
                $project->report = json_encode($report);
                $project->save();
            }

        }

    }
}
