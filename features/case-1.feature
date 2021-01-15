Feature: Session's ticket is accessible for any architecture node 
    In order to keep a session opened by a user in the whole architecture
    As a user of the service CAS
    I want to log in to a node and check if I have logged in to other nodes.
    
    Background:
    	Given a deployed CAS service with 3 nodes

    Scenario Outline:
        Given I have logged in <nodeForLoggin> with a valid "username" and "password"
        And I have got the "ticket" session for that user
        When I check the "ticket" in <anotherCASnode>
        Then I get the correct "username" of the user that created the session
        When I check the "ticket" in <onemoreCASnode>
        Then I get the correct "username" of the user that created the session

        Examples:
            | nodeForLoggin | anotherCASnode | onemoreCASnode |
            |     node1     |       node2    |      node3     |
            |     node1     |       node3    |      node2     |
            |     node2     |       node1    |      node3     |
            |     node2     |       node3    |      node1     |
            |     node3     |       node1    |      node2     |
            |     node3     |       node2    |      node1     |
