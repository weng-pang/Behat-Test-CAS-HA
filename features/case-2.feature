Feature: Loggin out from the whole CAS service 
    In order to be sure a nonvalid session is registered into CAS service
    As a user of the service CAS
    I want to log in to one node of the CAS service and later log out and check if my ticket has become invalid for the other nodes of the architecture.
    
    Background:
    	Given a deployed CAS service with 3 nodes

    Scenario Outline:
        Given I have logged in <nodeForLoggin> with a valid "username" and "password"
        And I have got the "ticket" session for that user
        And I have logged out that "ticket" in <nodeForLoggout>
        When I check the "ticket" in <checkInFirstNode>
        Then I get the message that describes it is an invalid "ticket"
        When I check the "ticket" in <checkInSecondNode>
        Then I get the message that describes it is an invalid "ticket"

        Examples:
            | nodeForLoggin | nodeForLoggout | checkInFirstNode | checkInSecondNode |
            |     node1     |       node1    |      node2       |      node3       |
            |     node1     |       node2    |      node1       |      node3       |
            |     node1     |       node3    |      node1       |      node2       |
            |     node1     |       node1    |      node1       |      node3       |
            |     node1     |       node2    |      node2       |      node3       |
            |     node1     |       node3    |      node3       |      node2       |
            |     node2     |       node1    |      node2       |      node3       |
            |     node2     |       node2    |      node1       |      node3       |
            |     node2     |       node3    |      node1       |      node2       |
            |     node2     |       node1    |      node1       |      node3       |
            |     node2     |       node2    |      node2       |      node3       |
            |     node2     |       node3    |      node3       |      node2       |
            |     node3     |       node1    |      node2       |      node3       |
            |     node3     |       node2    |      node1       |      node3       |
            |     node3     |       node3    |      node1       |      node2       |
            |     node3     |       node1    |      node1       |      node3       |
            |     node3     |       node2    |      node2       |      node3       |
            |     node3     |       node3    |      node3       |      node2       |
