<?php

/**
 * This is the front controller for the Orchestra remote execution and messaging framework.
 */
class Orchestra {
	/**
	 * This method is used to queue a Task for remote execution.
	 * @param Task $task the Task to be executed. Tasks consist of a Jobname and parameters.
	 * @return bool whether or not the queueing was successful
	 */
	public function queue(Task $task) {
	
	}
	
    /**
     * This method is used to deliver a message to all subscribed recipients.
     * @param Message $msg the Message to be delivered. Since Orchestra works on a subscriber model, the Message does not contain any explicit recipients, but rather parameter that recipients can subscribe to.
     * @return bool whether or not the delivery was successful
     */
	public function deliver(Message $msg) {
    
    }
}