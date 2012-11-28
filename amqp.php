<?php

/**
 * Class helper for AMQP autocomplete
 *
 * @author Florin Patan <florin.patan@gmail.com>
 *
 * @link https://github.com/dlsniper/phpamqp-doc
 * @link https://github.com/alanxz/rabbitmq-c
 *
 */
class AMQP {

    /**
     * Passing in this constant as a flag will forcefully disable all other flags.
     * Use this if you want to temporarily disable the amqp.auto_ack ini setting.
     */
    const AMQP_NOPARAM = 1;

    /**
     * Durable exchanges and queues will survive a broker restart, complete with all of their data.
     */
    const AMQP_DURABLE = 1;

    /**
     * Passive exchanges are queues will not be redeclared, but the broker will throw an error if the exchange or
     * queue does not exist.
     */
    const AMQP_PASSIVE = 1;

    /**
     * Valid for queues only, this flag indicates that only one client can be listening to and consuming from this queue.
     */
    const AMQP_EXCLUSIVE = 1;

    /**
     * For exchanges, the auto delete flag indicates that the exchange will be deleted as soon as no more queues are
     * bound to it. If no queues were ever bound the exchange, the exchange will never be deleted.
     *
     * For queues, the auto delete flag indicates that the queue will be deleted as soon as there are no more listeners
     * subscribed to it.
     * If no subscription has ever been active, the queue will never be deleted.
     *
     * Note: Exclusive queues will always be automatically deleted with the client disconnects.
     */
    const AMQP_AUTODELETE = 1;

    /**
     * Clients are not allowed to make specific queue bindings to exchanges defined with this flag.
     */
    const AMQP_INTERNAL = 1;

    /**
     * When passed to the consume method for a clustered environment, do not consume from the local node.
     */
    const AMQP_NOLOCAL = 1;

    /**
     * When passed to the AMQPQueue::get() and AMQPQueue::get() methods as a flag, the messages will be immediately
     * marked as acknowledged by the server upon delivery.
     *
     * @see AMQPQueue::get()
     */
    const AMQP_AUTOACK = 1;

    /**
     * Passed on queue creation, this flag indicates that the queue should be deleted if it becomes empty.
     */
    const AMQP_IFEMPTY = 1;

    /**
     * Passed on queue or exchange creation, this flag indicates that the queue or exchange should be deleted when
     * no clients are connected to the given queue or exchange.
     */
    const AMQP_IFUNUSED = 1;

    /**
     * When publishing a message, the message must be routed to a valid queue. If it is not, an error will be returned.
     */
    const AMQP_MANDATORY = 1;

    /**
     * When publishing a message, mark this message for immediate processing by the broker. (High priority message.)
     */
    const AMQP_IMMEDIATE = 1;

    /**
     * If set during a call to AMQPQueue::ack(), the delivery tag is treated as "up to and including",
     * so that multiple messages can be acknowledged with a single method.
     *
     * If set to zero, the delivery tag refers to a single message.
     *
     * If the AMQP_MULTIPLE flag is set, and the delivery tag is zero, this indicates acknowledgement of
     * all outstanding messages.
     */
    const AMQP_MULTIPLE = 1;

    /**
     * If set during a call to AMQPExchange::bind(), the server will not respond to the method.
     *
     * The client should not wait for a reply method. If the server could not complete the method it will raise
     * a channel or connection exception.
     */
    const AMQP_NOWAIT = 1;

    /**
     * A direct exchange type.
     */
    const AMQP_EX_TYPE_DIRECT = '1';

    /**
     * A fanout exchange type.
     */
    const AMQP_EX_TYPE_FANOUT = '1';

    /**
     * A topic exchange type.
     */
    const AMQP_EX_TYPE_TOPIC = '1';

    /**
     * A header exchange type.
     */
    const AMQP_EX_TYPE_HEADER = '1';

}