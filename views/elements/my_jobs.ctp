<tr>
    <th colspan="3">My Jobs</th>
</tr>
<tr>
    <th>Title</th>
    <th>Vehicle</th>
    <th>Last Updated</th>
</tr>

    <?php

        $jobs = $this->requestAction('/jobs/myJobs');
        foreach($jobs as $job) {
            echo '<tr>';
            echo '<td>'. $this->Html->link(__($job['Job']['name'], true), array('controller' => 'jobs', 'action' => 'edit', $job['Job']['id'])) .'</td>';
            echo '<td>'. $job['Vehicle']['year'] .' '. $job['Vehicle']['model'] .' ('. $job['Vehicle']['color'] .')</td>';
            echo '<td>'. date('m/d/Y', strtotime($job['Job']['modified'])) .'</td>';
            echo '</tr>';
        }

    ?>