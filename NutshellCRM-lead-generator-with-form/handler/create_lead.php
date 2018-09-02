<?php
   function newLead($n, $customer, $number, $e_mail, $comp, $add, $cit, $st, $zp, $as, $list, $leadSource){
       $params = array(
           'contact' => array(  
                'name' => $customer,
                'phone' => $number,
                'email' => $e_mail,
                'address' => array(
                      array("address_1"=>$add,
                        "city"=>$cit,
                        "state"=>$st,
                        "postalCode"=>$zp,)
                 ),
           ),
       );
       $newContact = $list->call('newContact', $params);
       $newContactId = $newContact->id;
       // Create a new account that includes the contact we just added
       $params = array(
           'account' => array(
                   'name' => $comp,
                   'contacts' => array(
                       array(
                               'id' => $newContactId
                       ),
               )
                   ),
           )
       ;
       $newAccount = $list->newAccount($params);
       $newAccountId = $newAccount->id;
       // Finally, create a lead that includes the account we just added
       $params = array(
           'lead' => array(
                   'primaryAccount' => array('id' => $newAccountId),
                   'confidence' => 10,
                   
                   'contacts' => array(
                           array(
                                   'relationship' => 'First Contact',
                                   'id'           => $newContactId,
                           ),
                   ),
                   'sources' => array(
                           array('id' => $leadSource),
                   ),
                   'assignee' => array(
                           'entityType' => 'Users',
                           'id' => $as,
                   ),
           ),
       );
       $result = $list->newLead($params);
       $list->newNote($result, $n);
   }

