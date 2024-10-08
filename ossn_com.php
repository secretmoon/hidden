<?php
function my_component_init() {
    // Redéfinir la vue 'profile/pages/profile' avec votre propre fichier
    ossn_extend_view('profile/pages/profile', 'plugins/default/profile/pages/profile');
}

// Fonction d'initialisation du composant
ossn_register_callback('ossn', 'init', 'my_component_init');
