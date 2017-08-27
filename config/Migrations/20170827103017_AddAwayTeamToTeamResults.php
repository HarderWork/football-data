<?php
use Migrations\AbstractMigration;

class AddAwayTeamToTeamResults extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('team_results');
        $table->addColumn('away_team', 'integer', [
            'default' => 0,
            'limit' => 11,
            'null' => false,
        ]);
        $table->update();

        $this->execute('UPDATE team_results SET away_team=1 WHERE home_team=0');
    }
}
